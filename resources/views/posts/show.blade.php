@extends('layouts.blog')

@section('meta')
    <meta property="og:url" content="{{$post->url}}"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="{{ $post->title }}"/>
    <meta property="og:description" content="{{ $post->summary }}"/>
    <meta property="og:image" content="{{ $post->preview_image }}"/>
@endsection

@section('content')
    <article class="mt-8 mb-8">
        <time class="mb-2 text-grey-darkest font-bold uppercase text-med">{{ $post->dateShort }} | <span
                    class="text-orange">{{ $post->category }}</span>
        </time>
        <h1 class="mt-2 mb-8 text-grey-darkest text-4xl">{{ $post->title }}</h1>

        <header class="font-sans leading-normal font-sans text-xl text-grey-darkest font-bold mb-8">
            {!!  $post->summary !!}
        </header>
        {!! $post->contents !!}

    </article>

@endsection
