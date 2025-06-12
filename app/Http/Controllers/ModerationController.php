<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Update;

class ModerationController extends Controller
{
    /**
     * Show the moderation dashboard.
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter'); // 'open', 'closed', or null

        $query = Update::query();

        if ($filter === 'open') {
            $query->where('is_approved', true);
        } elseif ($filter === 'closed') {
            $query->where('is_approved', false);
        }

        $allPosts = $query->latest()->paginate(10)->withQueryString();

        return view('moderation', compact('allPosts', 'filter'));
    }

    public function scopePending($query)
    {
        return $query->where('is_approved', false);
    }

    public function toggleStatus(Update $post)
    {
        $post->is_approved = !$post->is_approved;
        $post->save();

        return redirect()->back()->with('message', 'Post status updated.');
    }

    public function delete(Update $post)
    {
        $post->delete();

        return redirect()->back()->with('message', 'Post deleted successfully.');
    }

    public function showPost(Update $post)
    {
        return view('components.admin.moderation-posts-read', [
            'post' => $post,
        ]);
    }

    public function update(Request $request, Update $post)
    {
        $post->update($request->only(['title', 'content'])); // Add other fields as needed

        return redirect()->route('moderation')->with('success', 'Post updated successfully.');
    }
}
