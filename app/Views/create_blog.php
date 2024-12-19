<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog</title>

    <!-- Include TinyMCE WYSIWYG editor -->
<!-- Place the first <script> tag in your HTML's <head> -->
<script src="https://cdn.tiny.cloud/1/osg6krw5iwwdudh8n2j9awylspian77ir2bwbi85bc3qy3o0/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
  tinymce.init({
    selector: 'textarea',
    plugins: [
      // Core editing features
      'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
      // Your account includes a free trial of TinyMCE premium features
      // Try the most popular premium features until Jan 1, 2025:
      'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown','importword', 'exportword', 'exportpdf'
    ],
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
  });
</script>

<style>
  body {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center; 
    background: #283048;
    font-family: Arial, sans-serif;
    background: linear-gradient(to right, #859398, #283048);
    min-height: 100vh; 
    margin: 0;
    color: white; 
    padding: 20px;
    box-sizing: border-box; 
}

h2 {
    font-size: 28px; 
    margin-bottom: 15px;
    color: #fff; 
    text-align: center;
}

form {
    width: 100%;
    max-width: 1200px; 
    padding: 30px; 
    background-color: #fff;
    border-radius: 10px; 
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3); 
    text-align: center;
    box-sizing: border-box;
}

form label {
    display: block;
    text-align: left;
    font-size: 14px;
    color: rgb(29, 29, 29);
    margin-top: 12px;
}

form input,
form textarea {
    width: 100%; 
    padding: 12px; 
    border: 1px solid #ddd;
    border-radius: 6px;
    outline: none;
    margin-top: 8px; 
    font-size: 16px; 
    box-sizing: border-box; 
}

form textarea {
    min-height: 300px; 
    resize: vertical; 
}

form input:focus,
form textarea:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); 
}

button {
    width: 100%; 
    max-width: 400px; 
    padding: 15px;
    background-color: #007bff;
    color: white;
    font-size: 18px; 
    font-weight: bold;
    border: none;
    border-radius: 8px;
    margin-top: 20px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease; 
}

button:hover {
    background-color: #0056b3;
    transform: scale(1.05); 
}

.flash-message {
    margin: 15px 0;
    font-size: 14px;
    text-align: center;
}

.flash-message p {
    margin: 0;
}

.flash-message ul {
    padding-left: 20px;
    text-align: left;
}

p.para-2 {
            margin-top: 15px;
            font-size: 18px;
            color: white;
            text-align: center;
        }

        p.para-2 a {
            color:rgb(255, 255, 255);
            font-weight: bold;
            text-decoration: none;
        }

        p.para-2 a:hover {
            text-decoration: underline;
        }


@media (min-width: 768px) {
    form {
        padding: 40px; 
    }

    form textarea {
        min-height: 400px;
    }

    button {
        max-width: 300px; 
    }
}

</style>

</head>
<body>

    <h2>Create New Blog</h2>

    <!-- Show error messages if validation fails -->
    <?php if (session()->getFlashdata('errors')): ?>
        <div style="color: red;">
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <p><?= esc($error) ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form action="/dashboard/storeBlog" method="post">
        <?= csrf_field() ?>
        
        <div>
            <label for="title">Blog Title:</label>
            <input type="text" name="title" id="title" value="<?= old('title') ?>" required>
        </div>

        <div>
            <label for="content">Blog Content:</label>
            <textarea id="content" name="content"><?= old('content') ?></textarea>
        </div>

        <button type="submit">Create Blog</button>
    </form>
    
    <p class="para-2"><a href="/dashboard/blogs">Back to Blogs</a></p>

</body>
</html>
