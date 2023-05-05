<h2>Napísali o mne</h2>

<div class="all-comments">

    @foreach ($comments as $comment)

        <div class="comments">

            <img class="comment-img" src="images/general/comment-image.jpg" alt="fotka komentujúceho">

            <div class="five-stars">
                <img src="images/general/istockphoto-1140391316-1024x1024.jpg" alt="five stars">
            </div>

            <h4>{{ $comment->name }}</h4>
            <p>{{ $comment->comment }}</p>

        </div>

    @endforeach

</div>

<div class="last-footer">

    <p>&copy; 2023 | Marek Miklúšek |<a href="https://github.com/marek-miklusek"><i class="fa-brands fa-github"></i></a></p>
    <p>Design straight stolen from <a href="https://afinitybeauty.sk/" class="stolen">www.afinitybeauty.sk</a></p>

    <p>
        <a href="https://www.facebook.com/salonmatreshka" title="Facebook"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://www.instagram.com/viktoria_bochinche/" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
    </p>

</div>


