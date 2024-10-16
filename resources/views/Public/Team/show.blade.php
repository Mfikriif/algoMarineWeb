@extends('layouts.app')

@section('content')
    <section>
        <h1 class="text-center font-semibold text-5xl mt-28 text-[#08A79A]">{{ $team->Team_Name }}</h1>
        <div class="flex flex-wrap justify-center gap-20 w-3/4 mt-28 mx-auto">
            @foreach ($members as $anggota)
                <div class="hover:border border-[#08A79A] w-56 rounded-lg">
                    <img src="{{ asset('storage/' . $anggota->Image) }}" alt="aduh"
                        class="border border-red-600 w-32 h-32 mx-auto mt-5 rounded-full mb-5">
                    <p class="ml-4 mt-2">{{ $anggota->Nama }}
                        <br>
                        {{ $anggota->Position }}
                        <br>
                        {{ $anggota->Jurusan }}
                    </p>
                </div>
            @endforeach
        </div>
    </section>
@endsection
