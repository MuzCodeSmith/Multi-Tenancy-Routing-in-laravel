<div class="header">
    Hello, {{ Auth::check() ? Auth::user()->name : 'Guest' }}! Welcome to Dashboard
</div>