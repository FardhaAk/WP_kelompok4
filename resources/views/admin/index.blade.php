<x-app-layout>
    <div class="py-12">
        <div class="mx-auto py-2 sm:rounded-lg bg-white dark:bg-gray-800 shadow-sm">
            <div class="mx-auto sm:px-6 lg:px-8 text-gray-900 dark:text-gray-100">
                <h2 class="m-6 text-xl font-semibold text-gray-900 dark:text-gray-100 text-center">Tambah Data Buku</h2>
                
                <!-- Form -->
                <form action="{{ url('books/store') }}" method="post" class=" max-w-md w-full  justify-center m-auto">
                    @csrf
                    <!-- Title -->
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 dark:text-gray-300 text-sm font-medium mb-2">Judul</label>
                        <input type="text" name="title" id="title" class="form-input dark:bg-gray-700 w-full" required>
                    </div>

                    <!-- Author -->
                    <div class="mb-4">
                        <label for="author" class="block text-gray-700 dark:text-gray-300 text-sm font-medium mb-2">Penulis</label>
                        <input type="text" name="author" id="author" class="form-input dark:bg-gray-700 w-full" required>
                    </div>

                    <!-- Year -->
                    <div class="mb-4">
                        <label for="year" class="block text-gray-700 dark:text-gray-300 text-sm font-medium mb-2">Tahun Terbit</label>
                        <input type="text" name="year" id="year" class="form-input dark:bg-gray-700 w-full" required>
                    </div>

                    <!-- Copies in Circulation -->
                    <div class="mb-4">
                        <label for="copies_in_circulation" class="block text-gray-700 dark:text-gray-300 text-sm font-medium mb-2">Jumlah Salinan dalam Peredaran</label>
                        <input type="number" name="copies_in_circulation" id="copies_in_circulation" class="form-input dark:bg-gray-700 w-full" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="mb-4">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Buku</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
