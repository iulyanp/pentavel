@extends('app')
@section('link')
    @parent
@stop


@section('header')
    @parent
@stop


@section('content')
    <div class="content" id="blog">

        <form action="" method="POST" v-on="submit: onSubmitForm">
            <input type="hidden" id="token" name="token" value="{{ csrf_token() }}"/>
            <div class="form-group" v-class="has-error: ! newMessage.name">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" v-model="newMessage.title"/>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <input type="text" name="body" class="form-control" v-model="newMessage.body"/>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Submit" v-attr="disabled: errors"/>
            </div>

            <div class="alert alert-success" v-show="submitted">Article created!</div>
        </form>
{{--        <pre>@{{ $data | json 4}}</pre>--}}

        <hr/>

        <input v-model="searchText">
        <article v-repeat="articles | orderBy sortKey reverse | filterBy searchText in title">
            <h3>@{{ title }}</h3>
            <p>@{{ created_at }}</p>
            <p>@{{ body }}</p>
        </article>
    </div>

@endsection

@section('javascript')
    @parent
    <script type="application/javascript">
        Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');
        var vm = new Vue({
            el: '#blog',

            data: {
                sortKey: 'created_at',
                reverse: true,
                submitted: false,
                newMessage: {
                    title: '',
                    body: ''
                },
                articles: []
            },

            computed: {
                errors: function() {
                    for (var key in this.newMessage) {
                        if (! this.newMessage[key]) return true;
                    }
                    return false;
                }
            },

            ready: function() {
                this.fetchArticles();
            },

            methods: {
                fetchArticles: function() {
                    this.$http.get('api/articles', function(article){
                        this.$set('articles', article)
                    });
                },

                onSubmitForm: function(e) {
                    // prevent the default action
                    e.preventDefault();

                    var message = this.newMessage;

                    // add new message to messages array
                    this.articles.push(message);

                    // empty input values
                    this.newMessage = { title: '', body: '' };

                    // show thanks message
                    this.submitted = true;

                    // post ajax request
                    this.$http.post('api/articles', message)

                }

            },
            filters: {
                reverse: function (value, wordsOnly) {
                    var separator = '';
                    wordsOnly && (separator = ' ');
                    return value.split(separator).reverse().join(separator);
                }
            }
        });

    </script>
@endsection