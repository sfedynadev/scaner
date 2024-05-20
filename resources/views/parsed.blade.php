{{-- resources/views/parsed.blade.php --}}
<h1>Текст з PDF файлу</h1>
<div>{{ $text }}</div>

<br>
<br>
<br>
<a href="{{ route('upload') }}">Завантажити файл</a>
