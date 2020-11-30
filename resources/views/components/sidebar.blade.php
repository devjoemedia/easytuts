 <!-- SideBar -->
 <div class="sideBar">
     <div class="news">
         <h4 class="news-title">Latest Posts</h4>
         <div class="latest-news">
            <div class="body">
                @foreach ($currentPosts as $post)
                <div>
                    <img src="/storage/{{$post->postcover}}" alt="tech" class="news-img" />
                    <a href="/tutorials/{{ $post->slug }}">
                        <div class="latest-desc">
                            <h4>{{$post->title}}</h4>
                            <p>
                                <strong>By</strong> : {{$post->user->name}} On: {{ $post->created_at->toDateString() }}.
                            </p>
                        </div>
                    </a>

                </div>

                @endforeach

            </div>
         </div>
     </div>
     <!-- -------ADDS -->
     <div class="adds">
         <img src="/img/tech-1.jpg">
     </div>
     <!----------- Our Category------- -->
     <div id="categories">
         <h4>Our Categories</h4>
         <ul class="category-items">
             <li class="category-item">
                 <a href="#">Politics</a>
             </li>
             <li class="category-item">
                 <a href="#">Business</a>
             </li>
             <li class="category-item">
                 <a href="#">Sports</a>
             </li>
             <li class="category-item">
                 <a href="#">Entertainment</a>
             </li>
             <li class="category-item">
                 <a href="#">Technology</a>
             </li>
             <li class="category-item">
                 <a href="#">Trading</a>
             </li>
         </ul>
     </div>
     <!-- -------ADDS -->
     <div class="adds">
         <img src="/img/fit-1.jpg">
     </div>
 </div>
