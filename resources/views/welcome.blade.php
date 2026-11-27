<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#123d2b">
    <title>{{ config('app.name', 'School Grading System') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <style>
        :root{--green:#123d2b;--gold:#d7ad45;--cream:#f7f6f0}
        *{box-sizing:border-box}body{margin:0;background:var(--cream);color:#1b2921;font-family:'DM Sans',sans-serif}.topline{height:7px;background:var(--gold)}
        .page{min-height:calc(100vh - 7px);position:relative;overflow:hidden}.page:before{content:"";position:absolute;left:-220px;bottom:-340px;width:620px;height:620px;border:1px solid #dce2d8;border-radius:50%;box-shadow:0 0 0 36px var(--cream),0 0 0 37px #e8ebe3,0 0 0 74px var(--cream),0 0 0 75px #e8ebe3;pointer-events:none}
        .shell{width:min(1160px,calc(100% - 56px));margin:auto;position:relative}.header{height:106px;display:flex;align-items:center;justify-content:space-between;border-bottom:1px solid #e5e7df}.brand{display:flex;align-items:center;gap:14px;text-decoration:none}.crest{width:52px;height:60px;display:grid;place-items:center;color:var(--gold)}.brand-copy{line-height:1.2}.brand-copy strong{display:block;font-size:14px;letter-spacing:.11em;color:var(--green)}.brand-copy span{display:block;margin-top:6px;color:#78837b;font-size:10px;letter-spacing:.17em;text-transform:uppercase}.account-actions{display:flex;align-items:center;gap:10px}.nav-button{padding:12px 22px;background:var(--green);color:white;border:1px solid var(--green);border-radius:4px;font-size:13px;font-weight:600;text-decoration:none;transition:background .2s}.nav-button:hover{background:#20573d}.nav-button.secondary{background:transparent;color:var(--green)}.nav-button.secondary:hover{background:#e9eee8}
        .welcome-center{min-height:calc(100vh - 120px);display:grid;place-items:center;text-align:center;padding:40px 0}.welcome-center h1{margin:0;color:var(--green);font-family:'Playfair Display',Georgia,serif;font-size:clamp(42px,7vw,76px);line-height:1.12;letter-spacing:-.035em;font-weight:600}.welcome-center h1 span{display:block;color:#a8842e;font-size:.56em;letter-spacing:.04em;margin-top:12px}
        @media(max-width:600px){.shell{width:calc(100% - 36px)}.header{height:88px}.brand{gap:8px}.crest{width:42px}.brand-copy strong{font-size:10px}.brand-copy span{font-size:8px}.nav-button{padding:11px 14px;font-size:11px}.welcome-center{min-height:calc(100vh - 102px)}}
    </style>
</head>
<body>
<div class="topline"></div>
<main class="page">
    <div class="shell">
        <header class="header">
            <a class="brand" href="{{ url('/') }}" aria-label="School Grading System home">
                <span class="crest" aria-hidden="true"><svg viewBox="0 0 48 56" width="46" height="54" fill="none"><path d="M24 2 43 9v15c0 13-8 22-19 29C13 46 5 37 5 24V9l19-7Z" stroke="currentColor" stroke-width="2"/><path d="M14 35V20l10-7 10 7v15M18 35V24h12v11M11 39h26" stroke="currentColor" stroke-width="1.7"/><path d="M24 17v4m-4-2h8" stroke="currentColor" stroke-width="1.5"/></svg></span>
                <span class="brand-copy"><strong>SCHOOL GRADING SYSTEM</strong><span>Student Portal</span></span>
            </a>
            <nav class="account-actions" aria-label="Account access">
                @if (Route::has('login'))
                    @auth
                        <a class="nav-button" href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a class="nav-button secondary" href="{{ route('register') }}">Sign in</a>
                        <a class="nav-button" href="{{ route('login') }}">Log in <span aria-hidden="true">&rarr;</span></a>
                    @endauth
                @endif
            </nav>
        </header>
        <section class="welcome-center" aria-label="Welcome">
            <h1>School Grading System<span>Student Portal</span></h1>
        </section>
    </div>
</main>
</body>
</html>
