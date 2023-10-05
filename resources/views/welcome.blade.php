<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 flex justify-center bg-white border-b border-gray-200">
                <section>
                    <h1 class="text-4xl text-blue-800">Short you link</h1>
                    <form method="POST" action="{{route('short.url')}}">
                        @csrf
                        <input class="border border-gray-300 rounded-lg" type="url" name="original_url">
                        <button class="m-2 px-6 py-2 bg-green-500 hover:bg-green-700 rounded-lg" type="submit">Short</button>
                    </form>
                </section>
            </div>
        </div>
    </div>
</x-guest-layout>
