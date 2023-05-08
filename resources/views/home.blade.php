<!DOCTYPE html>
<html lang="en">
<head>
   @include("layout.head")
</head>
<body class="bg-light">
   @include("layout.navbar")
<div class="container ps-5 pe-5">
    <div class="row">
        <div class="col-12 p-2 text-center mt-4 mb-4 border-bottom-black">
        <h1 class="fw-bold fs-1">Welcome to my blog</h1>
        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 clo-12">
            @foreach ($blogs as $blog)
            <div class="row mt-4 mb-4 blog-card border rounded">
                <div class="col-md-4 col-12 p-0 m-0">
                    <img class="rounded w-100 h-100" src="{{ $blog['image_url_portait'] }}">
                </div>
                <div class="col-md-8 col-12 p-0 m-0"></div>
        </div>
        @endforeach
    </div>
    <div class="col-md-1 clo-12">A</div>
    <div class="col-md-3 clo-12">B</div>
</div>
    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>
