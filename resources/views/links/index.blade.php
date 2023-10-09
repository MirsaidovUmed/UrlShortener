<x-app-layout>
    <x-slot name="header" >
        <p class="text-gray-200">My links</p>
    </x-slot>
    <div class="max-w-6xl mx-auto">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
                            <th scope="col" class="px-5 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Original Url</th>
                            <th scope="col" class="px-5 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Short_Url</th>
                            <th scope="col" class="px-5 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Delete</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        <tr></tr>
                        @foreach($links as $link)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{$link->id}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$link->original_url}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$link->short_url}}</td>
                            <td>
                                <form action="/delete/{{ $link->id }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        <!-- More items... -->
                        </tbody>
                    </table>
                    <div class="m-2 p-2 text-gray-200">Pagination</div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
