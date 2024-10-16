@extends('layouts.app')

@section('title', 'Teams', '| Algomarine')

@section('content')

    <section>
        <header>
            <h1 class=" text-center text-5xl font-semibold mt-16 text-[#08A79A]">Divisi Algomarine</h1>
        </header>

        <div class="flex flex-row flex-wrap w-5/6 mt-32 justify-center gap-16 mx-auto ">
            @foreach ($teams as $tim)
                <a href="{{ route('Teams.show', $tim->Slug) }}" class="w-80 h-56 hover:border border-[#08A79A] rounded-lg">
                    <h5 class="mt-24 ml-3 font-semibold text-[#08A79A]">
                        {{ $tim->Team_Name }}
                    </h5>
                    <p class="ml-3 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quasi</p>
                </a>
            @endforeach
        </div>


    </section>

@endsection
