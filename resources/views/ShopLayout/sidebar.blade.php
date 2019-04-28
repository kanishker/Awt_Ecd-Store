
<?php

$moveies = App\Model\Movie::all()

?>
<h1 class="my-4">E-CD store....;-></h1>
    <div class="list-group">
        @foreach ($moveies as $moviessssss)
        <a href="#" class="list-group-item">{{$moviessssss->genere}}</a>
        @endforeach
    </div>

