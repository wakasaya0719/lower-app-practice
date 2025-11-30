<?php

use function Livewire\Volt\{state, mount};

state(['word', 'word_lower']);

mount(function () {
    $this->word_lower = strtolower($this->word);
});

?>

<div>
    <h1>大文字を小文字に変換してみました</h1>
    <p>
        {{ $word_lower }}
    </p>
</div>
