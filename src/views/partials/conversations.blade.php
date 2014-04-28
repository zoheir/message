<div class="box">
    <div class="box-header">
        <span class="title">{{ trans('message::message.title.conversations') }}</span>
    </div>
    @if( isset($conversations) )
    @foreach( $conversations as $conversation )
        <div class="box-section narrow news">
            <div class="avatar"><img src="{{ Gravatar::src( $user->email ) }}" class="avatar-small"></div>
            <div class="news-time">
                <span>{{ $conversation->updated_at->format('d') }}</span> {{ $conversation->updated_at->format('M') }}
            </div>
            <div class="news-content">
                <div class="news-title"><a href="{{ url('message/thread/'.$conversation->id) }}" ng-click="messageRead({{$conversation->id}})">{{ $conversation->subject }}</a></div>
                <div class="news-text">
                    <span class="label label-info">#{{ $conversation->messages()->first()->user->first_name }}</span>
                </div>
            </div>
        </div>
    @endforeach
    @else
        <div class="box-content">
            No conversation
        </div>
    @endif
</div>

