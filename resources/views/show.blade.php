@include('header')
    <div id="container" style="">
        <a href="/andreism/{{ $id }}" target="_blank">
            <p>That time Andre...</p>
            <p>{{ $story }}</p>
            <p id="author">{{ $author }}</p>
        </a>
    </div>
    <a href="#" id="open_submit">Submit</a>
    <div id="modal">
        <div id="modal_form">
            <textarea placeholder="That time Andre..."></textarea>
            <input placeholder="Name">
            <button id="submit_andreism">Submit</button>
        </div>
    </div>
@include('footer')