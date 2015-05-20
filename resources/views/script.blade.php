@foreach ($talks as $talk)
    <h3>
        {{ $talk->name }}
    </h3>
    <p>
        Welcome to NomadPHP Lightning Talks, I'm Joe Ferguson. NomadPHP Lighting talks are 10 minute
        talks that give a high level overview or an in depth look at a small portion of a PHP related
        topic. Lighting Talks are a great way for new speakers to build their speaking resume and for
        long time speakers to test drive new talk ideas. If you would like to give a 10 minute lightning
        talk please email Joe at nomadphp.com
    </p>
    <p>
        Right now we have {{ $talk->author->first_name }} {{ $talk->author->last_name }} and {{ $talk->author->pronoun }} will be
        talking about {{ $talk->name }}. Please make sure you visit joind.in after the talk and leave
        {{ $talk->author->first_name }} some feedback. {{ $talk->author->first_name }}, take it away:
    </p>
    <p>
        Joind.in link: {{ $talk->joindin }}
    </p>
    <h4>Ending</h4>
    <p>
        Thanks for joining us for another NomadPHP Lightning Talk. If you would like to give a Lightning
        talks please email Joe: Joe at nomadphp.com Please make sure you visit joind.in and leave
        {{ $talk->author->first_name }} some feedback.
    </p>
    <hr>
@endforeach