<x-admin-layout>
    <div class="flex items-center justify-between mb-5">
        <h1 class="text-2xl font-bold text-[#502C58]">Tables</h1>
    </div>
    <div class="flex flex-col gap-5">
        <!--Adoptions-->
        <div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200" id="adoptions">
            <h1 class="text-xl text-[#4ABDAC] font-bold">Adoptions</h1>
            <!--Table 1-->
            <div class="overflow-x-auto w-full">
                <div class="flex flex-row gap-2 mb-3 text-sm text-white font-semibold">
                    <div class="rounded-lg px-4 py-2 bg-[#502C58]">
                        Table Name
                    </div>
                    <button class="rounded-lg px-4 py-2 bg-[#4ABDAC] hover:bg-[#369688] flex items-center">
                        <i class="fa-solid fa-plus mr-2"></i>
                        Add Record
                    </button>
                </div>
                <table class="table-fixed min-w-full border border-collapse text-sm">
                    <thead>
                        <tr>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 1</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 2</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 3</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 4</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 5</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 6</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 7</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500">Value 1</td>
                            <td class="px-4 py-2 border border-gray-500">Value 2</td>
                            <td class="px-4 py-2 border border-gray-500">Value 3</td>
                            <td class="px-4 py-2 border border-gray-500">Value 4</td>
                            <td class="px-4 py-2 border border-gray-500">Value 5</td>
                            <td class="px-4 py-2 border border-gray-500">Value 6</td>
                            <td class="px-4 py-2 border border-gray-500">Value 7</td>
                            <td class="px-4 py-2 border border-gray-500 text-center max-w-[200px]">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="rounded-lg px-3 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 flex items-center">
                                        <i class="fa-regular fa-pen-to-square mr-2"></i>
                                        Edit
                                    </button>
                                    <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500">Value 1</td>
                            <td class="px-4 py-2 border border-gray-500">Value 2</td>
                            <td class="px-4 py-2 border border-gray-500">Value 3</td>
                            <td class="px-4 py-2 border border-gray-500">Value 4</td>
                            <td class="px-4 py-2 border border-gray-500">Value 5</td>
                            <td class="px-4 py-2 border border-gray-500">Value 6</td>
                            <td class="px-4 py-2 border border-gray-500">Value 7</td>
                            <td class="px-4 py-2 border border-gray-500 text-center max-w-[200px]">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="rounded-lg px-3 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 flex items-center">
                                        <i class="fa-regular fa-pen-to-square mr-2"></i>
                                        Edit
                                    </button>
                                    <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500">Value 1</td>
                            <td class="px-4 py-2 border border-gray-500">Value 2</td>
                            <td class="px-4 py-2 border border-gray-500">Value 3</td>
                            <td class="px-4 py-2 border border-gray-500">Value 4</td>
                            <td class="px-4 py-2 border border-gray-500">Value 5</td>
                            <td class="px-4 py-2 border border-gray-500">Value 6</td>
                            <td class="px-4 py-2 border border-gray-500">Value 7</td>
                            <td class="px-4 py-2 border border-gray-500 text-center max-w-[200px]">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="rounded-lg px-3 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 flex items-center">
                                        <i class="fa-regular fa-pen-to-square mr-2"></i>
                                        Edit
                                    </button>
                                    <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--Table 2-->
            <div class="overflow-x-auto w-full">
                <div class="flex flex-row gap-2 mb-3 text-sm text-white font-semibold">
                    <div class="rounded-lg px-4 py-2 bg-[#502C58]">
                        Table Name
                    </div>
                    <button class="rounded-lg px-4 py-2 bg-[#4ABDAC] hover:bg-[#369688] flex items-center">
                        <i class="fa-solid fa-plus mr-2"></i>
                        Add Record
                    </button>
                </div>
                <table class="table-fixed min-w-full border border-collapse text-sm">
                    <thead>
                        <tr>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 1</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 2</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 3</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 4</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 5</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 6</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 7</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500">Value 1</td>
                            <td class="px-4 py-2 border border-gray-500">Value 2</td>
                            <td class="px-4 py-2 border border-gray-500">Value 3</td>
                            <td class="px-4 py-2 border border-gray-500">Value 4</td>
                            <td class="px-4 py-2 border border-gray-500">Value 5</td>
                            <td class="px-4 py-2 border border-gray-500">Value 6</td>
                            <td class="px-4 py-2 border border-gray-500">Value 7</td>
                            <td class="px-4 py-2 border border-gray-500 text-center max-w-[200px]">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="rounded-lg px-3 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 flex items-center">
                                        <i class="fa-regular fa-pen-to-square mr-2"></i>
                                        Edit
                                    </button>
                                    <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500">Value 1</td>
                            <td class="px-4 py-2 border border-gray-500">Value 2</td>
                            <td class="px-4 py-2 border border-gray-500">Value 3</td>
                            <td class="px-4 py-2 border border-gray-500">Value 4</td>
                            <td class="px-4 py-2 border border-gray-500">Value 5</td>
                            <td class="px-4 py-2 border border-gray-500">Value 6</td>
                            <td class="px-4 py-2 border border-gray-500">Value 7</td>
                            <td class="px-4 py-2 border border-gray-500 text-center max-w-[200px]">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="rounded-lg px-3 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 flex items-center">
                                        <i class="fa-regular fa-pen-to-square mr-2"></i>
                                        Edit
                                    </button>
                                    <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500">Value 1</td>
                            <td class="px-4 py-2 border border-gray-500">Value 2</td>
                            <td class="px-4 py-2 border border-gray-500">Value 3</td>
                            <td class="px-4 py-2 border border-gray-500">Value 4</td>
                            <td class="px-4 py-2 border border-gray-500">Value 5</td>
                            <td class="px-4 py-2 border border-gray-500">Value 6</td>
                            <td class="px-4 py-2 border border-gray-500">Value 7</td>
                            <td class="px-4 py-2 border border-gray-500 text-center max-w-[200px]">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="rounded-lg px-3 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 flex items-center">
                                        <i class="fa-regular fa-pen-to-square mr-2"></i>
                                        Edit
                                    </button>
                                    <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--Table 3-->
            <div class="overflow-x-auto w-full">
                <div class="flex flex-row gap-2 mb-3 text-sm text-white font-semibold">
                    <div class="rounded-lg px-4 py-2 bg-[#502C58]">
                        Table Name
                    </div>
                    <button class="rounded-lg px-4 py-2 bg-[#4ABDAC] hover:bg-[#369688] flex items-center">
                        <i class="fa-solid fa-plus mr-2"></i>
                        Add Record
                    </button>
                </div>
                <table class="table-fixed min-w-full border border-collapse text-sm">
                    <thead>
                        <tr>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 1</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 2</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 3</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 4</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 5</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 6</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 7</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500">Value 1</td>
                            <td class="px-4 py-2 border border-gray-500">Value 2</td>
                            <td class="px-4 py-2 border border-gray-500">Value 3</td>
                            <td class="px-4 py-2 border border-gray-500">Value 4</td>
                            <td class="px-4 py-2 border border-gray-500">Value 5</td>
                            <td class="px-4 py-2 border border-gray-500">Value 6</td>
                            <td class="px-4 py-2 border border-gray-500">Value 7</td>
                            <td class="px-4 py-2 border border-gray-500 text-center max-w-[200px]">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="rounded-lg px-3 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 flex items-center">
                                        <i class="fa-regular fa-pen-to-square mr-2"></i>
                                        Edit
                                    </button>
                                    <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500">Value 1</td>
                            <td class="px-4 py-2 border border-gray-500">Value 2</td>
                            <td class="px-4 py-2 border border-gray-500">Value 3</td>
                            <td class="px-4 py-2 border border-gray-500">Value 4</td>
                            <td class="px-4 py-2 border border-gray-500">Value 5</td>
                            <td class="px-4 py-2 border border-gray-500">Value 6</td>
                            <td class="px-4 py-2 border border-gray-500">Value 7</td>
                            <td class="px-4 py-2 border border-gray-500 text-center max-w-[200px]">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="rounded-lg px-3 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 flex items-center">
                                        <i class="fa-regular fa-pen-to-square mr-2"></i>
                                        Edit
                                    </button>
                                    <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500">Value 1</td>
                            <td class="px-4 py-2 border border-gray-500">Value 2</td>
                            <td class="px-4 py-2 border border-gray-500">Value 3</td>
                            <td class="px-4 py-2 border border-gray-500">Value 4</td>
                            <td class="px-4 py-2 border border-gray-500">Value 5</td>
                            <td class="px-4 py-2 border border-gray-500">Value 6</td>
                            <td class="px-4 py-2 border border-gray-500">Value 7</td>
                            <td class="px-4 py-2 border border-gray-500 text-center max-w-[200px]">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="rounded-lg px-3 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 flex items-center">
                                        <i class="fa-regular fa-pen-to-square mr-2"></i>
                                        Edit
                                    </button>
                                    <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--Donations-->
        <div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200" id="donations">
            <h1 class="text-xl text-[#4ABDAC] font-bold">Donations</h1>
            <!--Table 1-->
            <div class="overflow-x-auto w-full">
                <div class="flex flex-row gap-2 mb-3 text-sm text-white font-semibold">
                    <div class="rounded-lg px-4 py-2 bg-[#502C58]">
                        Table Name
                    </div>
                    <button class="rounded-lg px-4 py-2 bg-[#4ABDAC] hover:bg-[#369688] flex items-center">
                        <i class="fa-solid fa-plus mr-2"></i>
                        Add Record
                    </button>
                </div>
                <table class="table-fixed min-w-full border border-collapse text-sm">
                    <thead>
                        <tr>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 1</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 2</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 3</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 4</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 5</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 6</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 7</th>

                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500">Value 1</td>
                            <td class="px-4 py-2 border border-gray-500">Value 2</td>
                            <td class="px-4 py-2 border border-gray-500">Value 3</td>
                            <td class="px-4 py-2 border border-gray-500">Value 4</td>
                            <td class="px-4 py-2 border border-gray-500">Value 5</td>
                            <td class="px-4 py-2 border border-gray-500">Value 6</td>
                            <td class="px-4 py-2 border border-gray-500">Value 7</td>
                            <td class="px-4 py-2 border border-gray-500 text-center max-w-[200px]">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="rounded-lg px-3 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 flex items-center">
                                        <i class="fa-regular fa-pen-to-square mr-2"></i>
                                        Edit
                                    </button>
                                    <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500">Value 1</td>
                            <td class="px-4 py-2 border border-gray-500">Value 2</td>
                            <td class="px-4 py-2 border border-gray-500">Value 3</td>
                            <td class="px-4 py-2 border border-gray-500">Value 4</td>
                            <td class="px-4 py-2 border border-gray-500">Value 5</td>
                            <td class="px-4 py-2 border border-gray-500">Value 6</td>
                            <td class="px-4 py-2 border border-gray-500">Value 7</td>
                            <td class="px-4 py-2 border border-gray-500 text-center max-w-[200px]">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="rounded-lg px-3 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 flex items-center">
                                        <i class="fa-regular fa-pen-to-square mr-2"></i>
                                        Edit
                                    </button>
                                    <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500">Value 1</td>
                            <td class="px-4 py-2 border border-gray-500">Value 2</td>
                            <td class="px-4 py-2 border border-gray-500">Value 3</td>
                            <td class="px-4 py-2 border border-gray-500">Value 4</td>
                            <td class="px-4 py-2 border border-gray-500">Value 5</td>
                            <td class="px-4 py-2 border border-gray-500">Value 6</td>
                            <td class="px-4 py-2 border border-gray-500">Value 7</td>
                            <td class="px-4 py-2 border border-gray-500 text-center max-w-[200px]">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="rounded-lg px-3 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 flex items-center">
                                        <i class="fa-regular fa-pen-to-square mr-2"></i>
                                        Edit
                                    </button>
                                    <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--Table 2-->
            <div class="overflow-x-auto w-full">
                <div class="flex flex-row gap-2 mb-3 text-sm text-white font-semibold">
                    <div class="rounded-lg px-4 py-2 bg-[#502C58]">
                        Table Name
                    </div>
                    <button class="rounded-lg px-4 py-2 bg-[#4ABDAC] hover:bg-[#369688] flex items-center">
                        <i class="fa-solid fa-plus mr-2"></i>
                        Add Record
                    </button>
                </div>
                <table class="table-fixed min-w-full border border-collapse text-sm">
                    <thead>
                        <tr>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 1</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 2</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 3</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 4</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 5</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 6</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 7</th>

                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500">Value 1</td>
                            <td class="px-4 py-2 border border-gray-500">Value 2</td>
                            <td class="px-4 py-2 border border-gray-500">Value 3</td>
                            <td class="px-4 py-2 border border-gray-500">Value 4</td>
                            <td class="px-4 py-2 border border-gray-500">Value 5</td>
                            <td class="px-4 py-2 border border-gray-500">Value 6</td>
                            <td class="px-4 py-2 border border-gray-500">Value 7</td>
                            <td class="px-4 py-2 border border-gray-500 text-center max-w-[200px]">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="rounded-lg px-3 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 flex items-center">
                                        <i class="fa-regular fa-pen-to-square mr-2"></i>
                                        Edit
                                    </button>
                                    <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500">Value 1</td>
                            <td class="px-4 py-2 border border-gray-500">Value 2</td>
                            <td class="px-4 py-2 border border-gray-500">Value 3</td>
                            <td class="px-4 py-2 border border-gray-500">Value 4</td>
                            <td class="px-4 py-2 border border-gray-500">Value 5</td>
                            <td class="px-4 py-2 border border-gray-500">Value 6</td>
                            <td class="px-4 py-2 border border-gray-500">Value 7</td>
                            <td class="px-4 py-2 border border-gray-500 text-center max-w-[200px]">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="rounded-lg px-3 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 flex items-center">
                                        <i class="fa-regular fa-pen-to-square mr-2"></i>
                                        Edit
                                    </button>
                                    <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500">Value 1</td>
                            <td class="px-4 py-2 border border-gray-500">Value 2</td>
                            <td class="px-4 py-2 border border-gray-500">Value 3</td>
                            <td class="px-4 py-2 border border-gray-500">Value 4</td>
                            <td class="px-4 py-2 border border-gray-500">Value 5</td>
                            <td class="px-4 py-2 border border-gray-500">Value 6</td>
                            <td class="px-4 py-2 border border-gray-500">Value 7</td>
                            <td class="px-4 py-2 border border-gray-500 text-center max-w-[200px]">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="rounded-lg px-3 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 flex items-center">
                                        <i class="fa-regular fa-pen-to-square mr-2"></i>
                                        Edit
                                    </button>
                                    <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--Table 3-->
            <div class="overflow-x-auto w-full">
                <div class="flex flex-row gap-2 mb-3 text-sm text-white font-semibold">
                    <div class="rounded-lg px-4 py-2 bg-[#502C58]">
                        Table Name
                    </div>
                    <button class="rounded-lg px-4 py-2 bg-[#4ABDAC] hover:bg-[#369688] flex items-center">
                        <i class="fa-solid fa-plus mr-2"></i>
                        Add Record
                    </button>
                </div>
                <table class="table-fixed min-w-full border border-collapse text-sm">
                    <thead>
                        <tr>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 1</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 2</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 3</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 4</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 5</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 6</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Attribute 7</th>

                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500">Value 1</td>
                            <td class="px-4 py-2 border border-gray-500">Value 2</td>
                            <td class="px-4 py-2 border border-gray-500">Value 3</td>
                            <td class="px-4 py-2 border border-gray-500">Value 4</td>
                            <td class="px-4 py-2 border border-gray-500">Value 5</td>
                            <td class="px-4 py-2 border border-gray-500">Value 6</td>
                            <td class="px-4 py-2 border border-gray-500">Value 7</td>
                            <td class="px-4 py-2 border border-gray-500 text-center max-w-[200px]">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="rounded-lg px-3 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 flex items-center">
                                        <i class="fa-regular fa-pen-to-square mr-2"></i>
                                        Edit
                                    </button>
                                    <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500">Value 1</td>
                            <td class="px-4 py-2 border border-gray-500">Value 2</td>
                            <td class="px-4 py-2 border border-gray-500">Value 3</td>
                            <td class="px-4 py-2 border border-gray-500">Value 4</td>
                            <td class="px-4 py-2 border border-gray-500">Value 5</td>
                            <td class="px-4 py-2 border border-gray-500">Value 6</td>
                            <td class="px-4 py-2 border border-gray-500">Value 7</td>
                            <td class="px-4 py-2 border border-gray-500 text-center max-w-[200px]">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="rounded-lg px-3 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 flex items-center">
                                        <i class="fa-regular fa-pen-to-square mr-2"></i>
                                        Edit
                                    </button>
                                    <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500">Value 1</td>
                            <td class="px-4 py-2 border border-gray-500">Value 2</td>
                            <td class="px-4 py-2 border border-gray-500">Value 3</td>
                            <td class="px-4 py-2 border border-gray-500">Value 4</td>
                            <td class="px-4 py-2 border border-gray-500">Value 5</td>
                            <td class="px-4 py-2 border border-gray-500">Value 6</td>
                            <td class="px-4 py-2 border border-gray-500">Value 7</td>
                            <td class="px-4 py-2 border border-gray-500 text-center max-w-[200px]">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="rounded-lg px-3 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 flex items-center">
                                        <i class="fa-regular fa-pen-to-square mr-2"></i>
                                        Edit
                                    </button>
                                    <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--Applications-->
        <div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200" id="applications">
            <h1 class="text-xl text-[#4ABDAC] font-bold">Applications</h1>
            <!-- Table -->
            <div class="overflow-x-auto w-full">
                <div class="flex flex-row gap-2 mb-3 text-sm text-white font-semibold">
                    <div class="rounded-lg px-4 py-2 bg-[#502C58]">
                        Adoption Applications
                    </div>
                    <button class="rounded-lg px-4 py-2 bg-[#4ABDAC] hover:bg-[#369688] flex items-center">
                        <i class="fa-solid fa-plus mr-2"></i>
                        Add Record
                    </button>
                </div>
                <table class="table-fixed min-w-full border border-collapse text-sm">
                    <thead>
                        <tr>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">First Name</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Last Name</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Address</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Phone</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Email</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Birth Date</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Company/Business Name</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Civil Status</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Sex</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Adopted Before</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Alternate First Name</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Alternate Last Name</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Relationship to Alternate</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Alternate Phone</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Alternate Email</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($applications as $application)
                            <tr>
                                <td class="px-4 py-2 border border-gray-500">{{ $application->first_name }}</td>
                                <td class="px-4 py-2 border border-gray-500">{{ $application->last_name }}</td>
                                <td class="px-4 py-2 border border-gray-500">{{ $application->address }}</td>
                                <td class="px-4 py-2 border border-gray-500">{{ $application->phone }}</td>
                                <td class="px-4 py-2 border border-gray-500">{{ $application->email }}</td>
                                <td class="px-4 py-2 border border-gray-500">{{ $application->birth_date }}</td>
                                <td class="px-4 py-2 border border-gray-500">{{ $application->company_business_name }}</td>
                                <td class="px-4 py-2 border border-gray-500">{{ $application->civil_status }}</td>
                                <td class="px-4 py-2 border border-gray-500">{{ $application->sex }}</td>
                                <td class="px-4 py-2 border border-gray-500">{{ $application->adopted_before }}</td>
                                <td class="px-4 py-2 border border-gray-500">{{ $application->alt_first_name }}</td>
                                <td class="px-4 py-2 border border-gray-500">{{ $application->alt_last_name }}</td>
                                <td class="px-4 py-2 border border-gray-500">{{ $application->relationship_to_alt }}</td>
                                <td class="px-4 py-2 border border-gray-500">{{ $application->phone_alt }}</td>
                                <td class="px-4 py-2 border border-gray-500">{{ $application->email_alt }}</td>
                                <td class="px-4 py-2 border border-gray-500 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <button class="rounded-lg px-3 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 flex items-center">
                                            <i class="fa-regular fa-pen-to-square mr-2"></i>
                                            Edit
                                        </button>
                                        <form action="{{ route('tables.applications.destroy', $application->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                                <i class="fa-regular fa-trash-can mr-2"></i>
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>