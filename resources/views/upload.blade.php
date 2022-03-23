<!DOCTYPE html>
<html>

<head>
    <title>Image Upload</title>
</head>

<body>
    <h1>Upload</h1>
    <form action="/upload" method="post" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
            <label for="">Upload Image</label>
            <input type="file" name="image" required class="course form-control">
            <input type="submit" name="Upload">
        </div>
    </form>
</body>

</html>