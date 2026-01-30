@extends('Layout.Home')

@section('content')
    <div class="container px-6 mx-auto" x-data="letterForm()">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Application Letter
        </h2>

        <div class="grid gap-6 mb-8 md:grid-cols-2">

            <!-- ================= FORM KIRI ================= -->
            <div class="bg-white rounded-lg shadow-md p-6 dark:bg-gray-800">

                <!-- Kota & Tanggal -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Kota & Tanggal</span>
                    <input x-model="tanggal" class="form-input mt-1 block w-full" placeholder="Bandung, 10 January 2026">
                </label>

                <!-- Subject -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Subject</span>
                    <input x-model="subject" class="form-input mt-1 block w-full" placeholder="Job Application">
                </label>

                <!-- Penerima & Alamat -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Penerima & Alamat</span>
                    <textarea x-model="penerima" class="form-textarea mt-1 block w-full" rows="3"
                        placeholder="HRD Manager&#10;PT. Bio Farma Indonesia&#10;Jl. Pasteur, Bandung"></textarea>
                </label>

                <!-- Paragraf Pembuka -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Paragraf Pembuka</span>
                    <textarea x-model="pembuka" class="form-textarea mt-1 block w-full" rows="3"></textarea>
                </label>

                <!-- Paragraf Isi -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Paragraf Isi</span>
                    <textarea x-model="isi" class="form-textarea mt-1 block w-full" rows="4"></textarea>
                </label>

                <!-- Paragraf Penutup -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Paragraf Penutup</span>
                    <textarea x-model="penutup" class="form-textarea mt-1 block w-full" rows="3"></textarea>
                </label>

                <!-- Nama Pengirim -->
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Nama Pengirim</span>
                    <input x-model="pengirim" class="form-input mt-1 block w-full">
                </label>

                <!-- BUTTON -->
                <div class="flex justify-start gap-6 mt-6 pl-2">
                    <button type="button"
                        class="px-5 py-2 text-sm font-medium text-white bg-purple-600 rounded-lg
               hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        Simpan Ke Database
                    </button>

                    <button type="button" @click.prevent="window.print()"
                        class="px-5 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg
               hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                        Cetak [Print]
                    </button>

                    <button type="button" @click.prevent="reset()"
                        class="px-5 py-2 text-sm font-medium text-white bg-red-600 rounded-lg
               hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
                        Clear
                    </button>
                </div>



            </div>


            <!-- ================= PREVIEW KANAN ================= -->

            <div class="print-area px-4 py-4 bg-white rounded-xl shadow-md dark:bg-gray-800">
                <div class="bg-gray-50  rounded-lg dark:bg-gray-900">
                    <div class="bg-white mx-auto text-sm leading-relaxed text-gray-900"
                        style="width: full;   font-family: 'Times New Roman', serif;">

                        <h2 class="text-center font-bold mb-6">
                            JOB APPLICATION LETTER
                        </h2>

                        <!-- Kota & Tanggal -->
                        <p class="mb-4 flex justify-end" x-text="tanggal || '[Kota, Tanggal]'"></p>

                        <!-- Subject -->
                        <p class="font-semibold mb-4" x-text="subject || '[Subject]'"></p>

                        <p class="mb-4 font-semibold">Dear Sir / Madam,</p>

                        <!-- Penerima & Alamat -->
                        <p class="mb-4 whitespace-pre-line" x-text="penerima || '[Penerima & Alamat]'"></p>

                        <!-- Paragraf -->
                        <p class="mb-3 text-justify whitespace-pre-line" x-text="pembuka || '[Paragraf Pembuka]'"></p>

                        <p class="mb-3 text-justify whitespace-pre-line" x-text="isi || '[Paragraf Isi]'"></p>

                        <p class="mb-6 text-justify whitespace-pre-line" x-text="penutup || '[Paragraf Penutup]'"></p>

                        <p class="mb-10">Sincerely,</p>
                        <!-- Pengirim -->
                        <p class="font-bold" x-text="pengirim || '[Nama Pengirim]'"></p>

                    </div>
                </div>

            </div>




        </div>
    </div>
    </div>
@endsection
