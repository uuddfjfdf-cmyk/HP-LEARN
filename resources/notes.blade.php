<!DOCTYPE html>
<html>
<head>
    <title>Notes App</title>
</head>
<body>

<h2>My Notes</h2>

<form method="POST" action="/notes">
    @csrf
    <textarea name="content" placeholder="Tulis apapun..." required></textarea>
    <br>
    <button type="submit">Save</button>
</form>

<hr>

@foreach($notes as $note)
    <div style="border:1px solid #ccc;padding:10px;margin:5px;">
        {{ $note->content }}
    </div>
@endforeach

</body>
</html>