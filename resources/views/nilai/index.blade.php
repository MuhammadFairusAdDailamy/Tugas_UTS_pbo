<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Data Nilai') }}
        </h2>
    </x-slot>


<div style="margin-top: 20px; margin-bottom: 20px;">
    <<a href="{{ route('nilai.create') }}" style="
    display: inline-block;
    margin-bottom: 15px;
    background-color: #0a2a43;
    color: white;
    padding: 10px 18px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: bold;
    box-shadow: 0px 3px 6px rgba(0,0,0,0.2);
    transition: 0.3s;
" onmouseover="this.style.backgroundColor='#133b5c'"
  onmouseout="this.style.backgroundColor='#0a2a43'">
    Tambah Nilai
</a>
</div>


<table border="1" cellpadding="10" cellspacing="0" style="
    width: 100%;
    border-collapse: collapse;
    background: white;
    border-radius: 8px;
    overflow: hidden;
    font-family: Arial, sans-serif;
    box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
">
    <tr style="background-color: #0a2a43; color: white; text-align: left;">
        <th>ID</th>
        <th>Nama Mahasiswa</th>
        <th>Matakuliah</th>
        <th>Nilai</th>
        <th>Aksi</th>
    </tr>

    @foreach($data as $n)
    <tr style="border-bottom: 1px solid #ddd;">
        <td>{{ $n->id }}</td>
        <td>{{ $n->nama_mahasiswa }}</td>
        <td>{{ $n->matakuliah }}</td>
        <td>{{ $n->nilai }}</td>
        <td>
            <a href="{{ route('nilai.edit', $n->id) }}" style="
                background-color: #1e90ff;
                padding: 6px 12px;
                color: white;
                border-radius: 5px;
                text-decoration: none;
                margin-right: 5px;
                font-size: 14px;
                transition: 0.3s;
            " onmouseover="this.style.backgroundColor='#187bcd'"
              onmouseout="this.style.backgroundColor='#1e90ff'">
                Edit
            </a>

            <form action="{{ route('nilai.destroy', $n->id) }}"
                  method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" style="
                    background-color: #e74c3c;
                    color: white;
                    padding: 6px 12px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                    font-size: 14px;
                    transition: 0.3s;
                " onmouseover="this.style.backgroundColor='#c0392b'"
                  onmouseout="this.style.backgroundColor='#e74c3c'">
                    Hapus
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
</x-app-layout>
