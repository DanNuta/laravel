
<head>
    <link rel="stylesheet" href="/css/header.css">
    <script src="/js/header.js"></script>
</head>

<header>
        <ul>
            <li class="{{ request()->is("home") ? "active" : "" }}"><a href="home">Home</a></li>
            <li class="{{ request()->is("about") ? "active" : "" }}"><a href="about">About</a></li>
            <li class="{{ request()->is("contact") ? "active" : "" }}"><a href="contact">Contact</a></li>
            <li class="{{ request()->is("/") ? "active" : "" }}"><a href="/">Index</a></li>  
        </ul>  
    </header>
    @yield("content")