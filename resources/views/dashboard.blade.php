<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col gap-4">
                <!-- Heading -->
                <div class="text-xl font-bold flex items-start">
                    Selamat datang&nbsp;
                    <span class="text-pink-500">
                        {{ Auth::user()->currentTeam->name ?? Auth::user()->name }}
                    </span>!
                </div>

                <div class="mt-2 grid grid-cols-[auto_1fr_1fr_1fr] gap-6 items-stretch">
                    <!-- Card Foto -->
                    <div class="bg-white shadow-xl sm:rounded-lg p-6 flex justify-center items-center h-full"
                        style="width: fit-content; min-width: max-content;">
                        @if ($siswa && $siswa->foto)
                            <img src="{{ asset('storage/' . $siswa->foto) }}"
                                alt="Foto Siswa"
                                style="
                                    width: 120px; 
                                    height: 160px; 
                                    object-fit: cover; 
                                    border: 2px solid #db2777; /* pink-600 */
                                    box-shadow: 0 2px 5px rgba(219, 39, 119, 0.3); /* shadow tipis pink */
                                    border-radius: 0.375rem; /* sm:rounded-lg set supaya matching */
                                " />
                        @else
                        <img src="{{ asset('storage/logo/profil.png') }}"
                            alt="Foto Default"
                            style="
                                width: 120px; 
                                height: 160px; 
                                object-fit: cover; 
                                border: 2px solid #db2777; /* pink-600 */
                                box-shadow: 0 2px 5px rgba(219, 39, 119, 0.3); /* shadow tipis pink */
                                border-radius: 0.375rem; /* sm:rounded-lg set supaya matching */
                            " />
                        @endif
                    </div>

                    <!-- Card Informasi Siswa -->
                    <div class="bg-white shadow-xl sm:rounded-lg p-6 max-w-xs flex flex-col h-full">
                        <h2 class="font-semibold mb-3 text-pink-600 text-lg">Informasi Siswa</h2>
                        <p class="text-sm mb-1"><strong>Nama :</strong> {{ $siswa->nama ?? '-' }}</p>
                        <p class="text-sm mb-1"><strong>NIS :</strong> {{ $siswa->nis ?? '-' }}</p>
                        <p class="text-sm mb-1"><strong>Gender :</strong> {{ $siswa->gender ?? '-' }}</p>
                        <p class="text-sm"><strong>Email :</strong> {{ Auth::user()->email }}</p>
                        <div class="mt-auto"></div> <!-- supaya isi card menempel atas -->
                    </div>

                    <!-- Card Detail PKL -->
                    <div class="bg-white shadow-xl sm:rounded-lg p-6 max-w-xs flex flex-col h-full">
                        <h2 class="font-semibold mb-3 text-pink-600 text-lg">Detail PKL</h2>
                        <div class="flex-grow overflow-auto text-sm">
                            @forelse ($pkls as $pkl)
                                <div class="mb-4">
                                    <p class="mb-1"><strong>Industri :</strong> {{ $pkl->industri->nama ?? '-' }}</p>
                                    <p class="mb-1"><strong>Guru Pembimbing :</strong> {{ $pkl->guru->nama ?? '-' }}</p>

                                    @php
                                        $mulai = \Carbon\Carbon::parse($pkl->mulai);
                                        $selesai = \Carbon\Carbon::parse($pkl->selesai);
                                        $sekarang = \Carbon\Carbon::now();

                                        $totalHari = $mulai->diffInDays($selesai);
                                        $hariBerjalan = $mulai->diffInDays(min($sekarang, $selesai));
                                        $persentase = $totalHari > 0 ? round(($hariBerjalan / $totalHari) * 100) : 0;
                                    @endphp

                                    <div class="mt-2">
                                        <p class="mb-1">Progress PKL</p>
                                        <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
                                            <div class="h-2 rounded-full"
                                                style="width: {{ $persentase }}%;
                                                        background: linear-gradient(90deg,rgb(209, 78, 144),rgb(241, 130, 186));
                                                        animation: progressBarAnimation 2s ease forwards;">
                                            </div>
                                        </div>
                                        <p class="text-xs text-right mt-1">{{ $persentase }}%</p>
                                    </div>
                                </div>
                            @empty
                                <p>Kamu belum lapor PKL !</p>
                            @endforelse
                        </div>
                    </div>

                    <!-- Card Tambah Data & Lapor PKL -->
                    <div class="bg-white shadow-xl sm:rounded-lg p-6 max-w-xs flex flex-col h-full">
                        <div>
                            <h2 class="text-lg font-semibold mb-3 text-pink-600">Tambah Data & Lapor PKL</h2>
                            <p class="mb-4 text-gray-600 text-sm">Tambah data industri dan laporan PKL kamu dengan mudah</p>

                            <button type="button"
                                onclick="window.location='{{ route('industri.index') }}';"
                                class="w-full mb-3 px-3 py-2 text-sm rounded-md border-2 border-gray-400 text-black transition duration-200 hover:border-pink-500 hover:shadow-md hover:shadow-pink-300">
                                Tambah Data Industri
                            </button>

                            <button type="button"
                                onclick="window.location='{{ route('pkl.index') }}';"
                                class="w-full px-3 py-2 text-sm rounded-md border-2 border-gray-400 text-black transition duration-200 hover:border-pink-500 hover:shadow-md hover:shadow-pink-300">
                                Lapor PKL
                            </button>
                        </div>
                        <div class="mt-auto"></div> <!-- Supaya tombol tetap atas kalau card lebih tinggi -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>