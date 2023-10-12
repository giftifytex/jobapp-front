<div>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif
    <form action="" method="">
        @csrf
        <input type="email" name="email" value="" wire:model='email'>
        <input type="password" name="password" value="" wire:model='password'>
        <button wire:click.prevent='submit'>Submit form</button>
    </form>
</div>
