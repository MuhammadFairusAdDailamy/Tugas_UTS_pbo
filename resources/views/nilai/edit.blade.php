<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Edit Nilai') }}
        </h2>
    </x-slot>

<!-- Tombol kembali -->
<div style="margin-bottom: 20px; text-align: left;">
    <a href="{{ route('nilai.index') }}">
        <button style="
            background-color: #1e3d59;
            color: white;
            padding: 10px 18px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            font-weight: bold;
            box-shadow: 0px 3px 6px rgba(0,0,0,0.2);
            transition: 0.3s;
        " onmouseover="this.style.backgroundColor='#295074'"
          onmouseout="this.style.backgroundColor='#1e3d59'">
            ← Kembali
        </button>
    </a>
</div>

<div style="
    background: white;
    padding: 25px;
    border-radius: 10px;
    width: 100%;
    max-width: 500px;
    margin: auto;
    font-family: Arial, sans-serif;
    box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
">
    <form action="{{ route('nilai.update', $nilai->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label style="
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        ">Nama Mahasiswa</label>
        <input type="text" name="nama_mahasiswa" value="{{ $nilai->nama_mahasiswa }}" required style="
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 15px;
        ">

        <label style="
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        ">Matakuliah</label>
        <input type="text" name="matakuliah" value="{{ $nilai->matakuliah }}" required style="
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 15px;
        ">

        <label style="
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        ">Nilai</label>
        <input type="number" name="nilai" value="{{ $nilai->nilai }}" required style="
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 20px;
        ">

        <button type="submit" style="
            width: 100%;
            background-color: #0a2a43;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: 0.3s;
        " onmouseover="this.style.backgroundColor='#133b5c'"
          onmouseout="this.style.backgroundColor='#0a2a43'">
            Update
        </button>
    </form>
</div>
</x-app-layout>