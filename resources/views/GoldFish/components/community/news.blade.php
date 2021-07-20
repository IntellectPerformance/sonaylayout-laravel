@foreach ($news as $article)
<a href="/community/articles/{{$article->id}}" style="text-decoration:none">
					<div class="news-article show" style="background-image:url({{$article->image}});">
						<div class="shadow"></div>
						<div class="news-content">
							<div class="news-title">{{$article->caption}}</div>
							<div class="news-short-text">{{$article->desc}}</div>
						</div>

						<div class="details-box">
							<div class="back-news"></div>
							<div class="title"><font style="color: gray; top: 30px; left: 20px; position: relative;">{{date('F d, Y', $article->date)}} | <a style="color: gray" href="/home/{{$article->habbo->username}}">{{$article->habbo->username}}</a></font></div>
						</div>
						
					</div>
					</a>
				</div>
@endforeach
