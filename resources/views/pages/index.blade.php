<?php

use App\Models\Section;
use function Livewire\Volt\{title, state};

title('Home');
state(['sections' => Section::query()->orderBy('sort')->get()])
?>

<div>
    <img
        src="https://www.vershinin.biz/pictures/xl/black-sands-opera.jpg"
        class="w-full"
        alt=""
    >
    <x-containers.page>
        @foreach($sections as $section)
            <x-containers.section
                title="{{ $section->title }}"
                body="{!! $section->body !!}"
            />
        @endforeach
    </x-containers.page>
</div>
