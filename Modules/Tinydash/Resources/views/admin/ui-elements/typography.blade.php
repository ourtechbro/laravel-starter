@extends('layouts.app')

@section('title')
    Typography
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-12 mb-4">
            <h2 class="h5 page-title">Typography</h2>
            <p class="text-muted">This primitive is meant to make it easy to display both user-centric or activity-centric actions in your app. Sometimes it makes sense to even blend both in a single timeline, which works perfectly.</p>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <strong class="card-title">Heading</strong>
                        </div>
                        <div class="card-body">
                            <p class="h1 mb-4">h1. Bootstrap heading</p>
                            <p class="h2 mb-3">h2. Bootstrap heading</p>
                            <p class="h3 mb-3">h3. Bootstrap heading</p>
                            <p class="h4 mb-3">h4. Bootstrap heading</p>
                            <p class="h5 mb-3">h5. Bootstrap heading</p>
                            <p class="h6 mb-3">h6. Bootstrap heading</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <strong class="card-title">Inline text elements</strong>
                        </div>
                        <div class="card-body">
                            <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                            <p><del>This line of text is meant to be treated as deleted text.</del></p>
                            <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                            <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                            <p><u>This line of text will render as underlined</u></p>
                            <p><small>This line of text is meant to be treated as fine print.</small></p>
                            <p><strong>This line rendered as bold text.</strong></p>
                            <p><em>This line rendered as italicized text.</em></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <strong class="card-title">Paragraph</strong>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, te dolores sapientem eos, nonumy civibus volutpat an vis. Vis vide definitiones mediocritatem te. Ad erant aperiri sit, eu eum alii tempor, stet evertitur assentior ei est. Omnis fuisset antiopam eu eum.</p>
                            <p>Ex tale mutat duo, nostro propriae ei cum, modo fabellas nominati in eos. Bonorum deleniti percipitur sit ad, in pri prima meliore euripidis. Ne ancillae apeirian eam. Tollit virtute conceptam in eos. Qui quaeque delectus maluisset no, id nulla partem erroribus sed.</p>
                            <p>Sea ut stet maluisset, an denique adolescens eam, vim ancillae mediocrem ad. Te quot virtute sea, vero blandit usu no. Dico utinam vituperata nam ad, ne est autem similique dissentias. Eum ne natum tempor cetero. Sit vero vocent interesset ea.</p>
                        </div>
                    </div>
                </div>
            </div> <!-- end section -->
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="mb-3"><strong>Blockquote</strong></div>
                    <blockquote class="blockquote">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="mb-3"><strong>Lead text</strong></div>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                </div>
            </div> <!-- end section -->
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <strong class="card-title">Unordered List</strong>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipiscing elit</li>
                                <li>Integer molestie lorem at massa</li>
                                <li>Facilisis in pretium nisl aliquet</li>
                                <li>Nulla volutpat aliquam velit <ul>
                                        <li>Phasellus iaculis neque</li>
                                        <li>Purus sodales ultricies</li>
                                        <li>Vestibulum laoreet porttitor sem</li>
                                        <li>Ac tristique libero volutpat at</li>
                                    </ul>
                                </li>
                                <li>Faucibus porta lacus fringilla vel</li>
                                <li>Aenean sit amet erat nunc</li>
                                <li>Eget porttitor lorem</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <strong class="card-title">Ordered List</strong>
                        </div>
                        <div class="card-body">
                            <ol>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipiscing elit</li>
                                <li>Integer molestie lorem at massa</li>
                                <li>Facilisis in pretium nisl aliquet</li>
                                <li>Nulla volutpat aliquam velit <ol>
                                        <li>Phasellus iaculis neque</li>
                                        <li>Purus sodales ultricies</li>
                                        <li>Vestibulum laoreet porttitor sem</li>
                                        <li>Ac tristique libero volutpat at</li>
                                    </ol>
                                </li>
                                <li>Faucibus porta lacus fringilla vel</li>
                                <li>Aenean sit amet erat nunc</li>
                                <li>Eget porttitor lorem</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <strong class="card-title">Unstyled Lists</strong>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipiscing elit</li>
                                <li>Integer molestie lorem at massa</li>
                                <li>Facilisis in pretium nisl aliquet</li>
                                <li>Nulla volutpat aliquam velit <ul>
                                        <li>Phasellus iaculis neque</li>
                                        <li>Purus sodales ultricies</li>
                                        <li>Vestibulum laoreet porttitor sem</li>
                                        <li>Ac tristique libero volutpat at</li>
                                    </ul>
                                </li>
                                <li>Faucibus porta lacus fringilla vel</li>
                                <li>Aenean sit amet erat nunc</li>
                                <li>Eget porttitor lorem</li>
                                <li>Eget porttitor lorem</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end section -->
        </div> <!-- .col-12 -->
    </div>
@endsection
