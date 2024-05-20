{{-- resources/views/upload.blade.php --}}
<form method="POST" action="{{ route('parse') }}" enctype="multipart/form-data">
    @csrf
    <input type="file" name="pdf" required>
    <button type="submit">Завантажити та обробити PDF</button>
</form>
