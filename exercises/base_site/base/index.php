<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="https://jesperorb.github.io/cat-deploy/favicon.png" type="image/x-icon">
  <title>About</title>
</head>
<body>
  <header>
    <h1> Frontend Blog </h1>
  </header>
  <nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
  </nav>
  <main>
    <section style="max-width: 40%">
      <h2 style="text-align:center;">  How to divide into partials in PHP</h2>
      <p> 
        We can divide our <code class="code-highlight">.php</code>-files into separate sub-files. 
        The content in the different files is not begin shared but copied to each individual file. 
        When we <code class="code-highlight">include</code> or <code class="code-highlight">require</code> some file
        we copy the content to these files. Each new page is <code class="code-highlight">stateless</code>, it does <strong>not</strong>
        remember the previous page. That is why we often <code class="code-highlight">include</code> the same <strong>variables</strong> or
        the same partial files on multiple pages. This does not always mean we have repetitive code. Sometimes the variables and code need
        to be copied to multiple locations so we can access it.
      </p>
      <p><span class="meta-data">Published: <?= date('m/d/Y - h:m'); ?></span><p>
    </section>
  </main>
  <footer>
  <p>Copyright Datadata</p>
  </footer>
</body>
</html>