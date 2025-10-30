<div class="overflow-x-auto rounded-lg shadow-xl">
  <table class="w-full text-sm text-left text-gray-700 font-sans">
    
    <thead class="text-xs uppercase bg-indigo-600 text-white">
      <tr>
        <th scope="col" class="px-6 py-4 font-semibold">Judul</th>
        <th scope="col" class="px-6 py-4 font-semibold">foto</th>
        <th scope="col" class="px-6 py-4 font-semibold text-center">detail</th>
        <th scope="col" class="px-6 py-4 font-semibold text-right">Desc</th>
        <th scope="col" class="px-6 py-4 font-semibold text-center">Aksi</th>
      </tr>
    </thead>
    
    @foreach ( $data as $item )
        <tbody>
      <tr class="bg-white border-b hover:bg-gray-50">
        <td class="px-6 py-4 font-medium whitespace-nowrap">{{ $item->judul}}</td>
        <td class="px-6 py-4">{{ asset('/storage'.$item->foto) }}</td>
        <td class="px-6 py-4 text-center">
          <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">Aktif</span>
        </td>
        <td class="px-6 py-4 text-right font-mono">{{ $item->detail}}</td>
        <td class="px-6 py-4 text-center">
          <button class="text-gray-600 hover:text-indigo-600 text-sm border border-gray-300 px-3 py-1 rounded transition-colors">{{ $item->tanggal}}</button>
        </td>
      </tr>
    </tbody>
    @endforeach
    
  </table>
</div>