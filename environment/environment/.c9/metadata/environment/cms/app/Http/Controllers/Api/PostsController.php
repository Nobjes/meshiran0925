{"filter":false,"title":"PostsController.php","tooltip":"/cms/app/Http/Controllers/Api/PostsController.php","ace":{"folds":[],"scrolltop":637,"scrollleft":0,"selection":{"start":{"row":53,"column":13},"end":{"row":53,"column":13},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"501441375efd090c0f7b74a7bed23e677878cf72","mime":"application/octet-stream","undoManager":{"mark":22,"position":22,"stack":[[{"start":{"row":12,"column":28},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":15},"action":"insert","lines":["use Auth;//ここ大事"],"id":3}],[{"start":{"row":12,"column":28},"end":{"row":13,"column":15},"action":"remove","lines":["","use Auth;//ここ大事"],"id":4}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":19},"action":"remove","lines":["use Auth;//この行を上に追加"],"id":5},{"start":{"row":10,"column":0},"end":{"row":10,"column":31},"action":"insert","lines":["Illuminate\\Support\\Facades\\Auth"]}],[{"start":{"row":10,"column":31},"end":{"row":10,"column":32},"action":"insert","lines":[";"],"id":6}],[{"start":{"row":10,"column":32},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":7}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":1},"action":"insert","lines":["u"],"id":8},{"start":{"row":10,"column":1},"end":{"row":10,"column":2},"action":"insert","lines":["s"]},{"start":{"row":10,"column":2},"end":{"row":10,"column":3},"action":"insert","lines":["e"]}],[{"start":{"row":10,"column":3},"end":{"row":10,"column":4},"action":"insert","lines":[" "],"id":9}],[{"start":{"row":12,"column":4},"end":{"row":12,"column":13},"action":"remove","lines":["Validator"],"id":10},{"start":{"row":12,"column":4},"end":{"row":12,"column":35},"action":"insert","lines":["Illuminate\\Validation\\Validator"]}],[{"start":{"row":10,"column":36},"end":{"row":11,"column":0},"action":"remove","lines":["",""],"id":11}],[{"start":{"row":11,"column":0},"end":{"row":11,"column":36},"action":"remove","lines":["use Illuminate\\Validation\\Validator;"],"id":12},{"start":{"row":11,"column":0},"end":{"row":11,"column":41},"action":"insert","lines":["use Illuminate\\Support\\Facades\\Validator;"]}],[{"start":{"row":44,"column":8},"end":{"row":52,"column":24},"action":"remove","lines":["//登録処理","        $post = new Post;","        $post->user_id = Auth::id();//ここでログインしているユーザidを登録しています","        $post->restaurant_id = $request->restaurant_id;","        $post->restaurant_score = $request->restaurant_score;","        $post->post_text = $request->post_text;","        $post->movie_id = $request->movie_id;","        $post->area_id = $request->area_id;","        $post->save();  "],"id":13},{"start":{"row":44,"column":8},"end":{"row":53,"column":22},"action":"insert","lines":[" //登録処理","        $post = new Post;","        $post->user_id = Auth::id();//ここでログインしているユーザidを登録しています","        $post->restaurant_id = $request->restaurant_id;","        $post->restaurant_score = $request->restaurant_score;","        $post->post_text = $request->post_text;","        $post->movie_id = $request->movie_id;","        $post->area_id = $request->area_id;","        dd($post->toArray());","        $post->save();"]}],[{"start":{"row":52,"column":9},"end":{"row":52,"column":10},"action":"remove","lines":["d"],"id":14},{"start":{"row":52,"column":8},"end":{"row":52,"column":9},"action":"remove","lines":["d"]}],[{"start":{"row":52,"column":8},"end":{"row":52,"column":9},"action":"insert","lines":["v"],"id":15},{"start":{"row":52,"column":9},"end":{"row":52,"column":10},"action":"insert","lines":["a"]},{"start":{"row":52,"column":10},"end":{"row":52,"column":11},"action":"insert","lines":["r"]}],[{"start":{"row":52,"column":11},"end":{"row":52,"column":12},"action":"insert","lines":[" "],"id":16},{"start":{"row":52,"column":12},"end":{"row":52,"column":13},"action":"insert","lines":["d"]},{"start":{"row":52,"column":13},"end":{"row":52,"column":14},"action":"insert","lines":["u"]}],[{"start":{"row":52,"column":14},"end":{"row":52,"column":15},"action":"insert","lines":["m"],"id":17},{"start":{"row":52,"column":15},"end":{"row":52,"column":16},"action":"insert","lines":["p"]}],[{"start":{"row":52,"column":35},"end":{"row":53,"column":0},"action":"insert","lines":["",""],"id":18},{"start":{"row":53,"column":0},"end":{"row":53,"column":8},"action":"insert","lines":["        "]},{"start":{"row":53,"column":8},"end":{"row":53,"column":9},"action":"insert","lines":["e"]},{"start":{"row":53,"column":9},"end":{"row":53,"column":10},"action":"insert","lines":["x"]}],[{"start":{"row":53,"column":10},"end":{"row":53,"column":11},"action":"insert","lines":["i"],"id":19},{"start":{"row":53,"column":11},"end":{"row":53,"column":12},"action":"insert","lines":["t"]}],[{"start":{"row":53,"column":12},"end":{"row":53,"column":13},"action":"insert","lines":[";"],"id":20}],[{"start":{"row":52,"column":34},"end":{"row":52,"column":35},"action":"remove","lines":[";"],"id":21}],[{"start":{"row":52,"column":34},"end":{"row":52,"column":35},"action":"insert","lines":[";"],"id":22}],[{"start":{"row":52,"column":11},"end":{"row":52,"column":12},"action":"remove","lines":[" "],"id":23}],[{"start":{"row":52,"column":11},"end":{"row":52,"column":12},"action":"insert","lines":["_"],"id":24}]]},"timestamp":1631452275456}