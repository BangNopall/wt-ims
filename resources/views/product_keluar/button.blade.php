<form action="{{ route('wdbarang.delete', ['id' => $productKeluar->id]) }}" method="post">
    @csrf
    <button onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Delete</button>
</form>
