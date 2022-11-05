{"filter":false,"title":"PostController.php","tooltip":"/blog/app/Http/Controllers/PostController.php","undoManager":{"mark":55,"position":55,"stack":[[{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"insert","lines":["u"]},{"start":{"row":4,"column":1},"end":{"row":4,"column":2},"action":"insert","lines":["s"]},{"start":{"row":4,"column":2},"end":{"row":4,"column":3},"action":"insert","lines":["e"]}],[{"start":{"row":4,"column":3},"end":{"row":4,"column":4},"action":"insert","lines":[" "],"id":3},{"start":{"row":4,"column":4},"end":{"row":4,"column":5},"action":"insert","lines":["a"]}],[{"start":{"row":4,"column":4},"end":{"row":4,"column":5},"action":"remove","lines":["a"],"id":4}],[{"start":{"row":4,"column":4},"end":{"row":4,"column":5},"action":"insert","lines":["A"],"id":5},{"start":{"row":4,"column":5},"end":{"row":4,"column":6},"action":"insert","lines":["p"]},{"start":{"row":4,"column":6},"end":{"row":4,"column":7},"action":"insert","lines":["p"]}],[{"start":{"row":4,"column":7},"end":{"row":4,"column":8},"action":"insert","lines":["/"],"id":6}],[{"start":{"row":4,"column":7},"end":{"row":4,"column":8},"action":"remove","lines":["/"],"id":7}],[{"start":{"row":4,"column":7},"end":{"row":4,"column":8},"action":"insert","lines":["\\"],"id":8},{"start":{"row":4,"column":8},"end":{"row":4,"column":9},"action":"insert","lines":["P"]},{"start":{"row":4,"column":9},"end":{"row":4,"column":10},"action":"insert","lines":["o"]}],[{"start":{"row":4,"column":10},"end":{"row":4,"column":11},"action":"insert","lines":["s"],"id":9},{"start":{"row":4,"column":11},"end":{"row":4,"column":12},"action":"insert","lines":["t"]}],[{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"insert","lines":[":"],"id":10}],[{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"remove","lines":[":"],"id":11}],[{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"insert","lines":[";"],"id":12}],[{"start":{"row":9,"column":5},"end":{"row":9,"column":6},"action":"remove","lines":["/"],"id":13},{"start":{"row":9,"column":4},"end":{"row":9,"column":5},"action":"remove","lines":["/"]}],[{"start":{"row":9,"column":4},"end":{"row":18,"column":1},"action":"insert","lines":["/**"," * Post一覧を表示する"," * "," * @param Post Postモデル"," * @return array Postモデルリスト"," */","public function index(Post $post)","{","    return $post->get();","}"],"id":14}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "],"id":15},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":9,"column":0},"end":{"row":14,"column":7},"action":"remove","lines":["        /**","     * Post一覧を表示する","     * ","     * @param Post Postモデル","     * @return array Postモデルリスト","     */"],"id":16},{"start":{"row":8,"column":1},"end":{"row":9,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":0,"column":0},"end":{"row":14,"column":0},"action":"remove","lines":["<?php","","namespace App\\Http\\Controllers;","","use App\\Post;","use Illuminate\\Http\\Request;","","class PostController extends Controller","{","    public function index(Post $post)","    {","        return $post->get();","    }","}",""],"id":17},{"start":{"row":0,"column":0},"end":{"row":14,"column":2},"action":"insert","lines":["<?php","","namespace App\\Http\\Controllers;","","use App\\Post;","use Illuminate\\Http\\Request;","","class PostController extends Controller","{","    public function index(Post $post)","    {","        return view('posts/index')->with(['posts' => $post->get()]);  ","    }","}","?>"]}],[{"start":{"row":9,"column":4},"end":{"row":12,"column":5},"action":"remove","lines":["public function index(Post $post)","    {","        return view('posts/index')->with(['posts' => $post->get()]);  ","    }"],"id":18},{"start":{"row":9,"column":4},"end":{"row":18,"column":1},"action":"insert","lines":["/**"," * Post一覧を表示する"," * "," * @param Post Postモデル"," * @return array Postモデルリスト"," */","public function index(Post $post)","{","    return $post->get();","}"]}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "],"id":19},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "],"id":20},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":9,"column":8},"end":{"row":9,"column":12},"action":"remove","lines":["    "],"id":22}],[{"start":{"row":4,"column":8},"end":{"row":4,"column":18},"action":"insert","lines":["App\\Models"],"id":23}],[{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"insert","lines":["\\"],"id":24}],[{"start":{"row":4,"column":11},"end":{"row":4,"column":12},"action":"remove","lines":["\\"],"id":25},{"start":{"row":4,"column":10},"end":{"row":4,"column":11},"action":"remove","lines":["p"]},{"start":{"row":4,"column":9},"end":{"row":4,"column":10},"action":"remove","lines":["p"]},{"start":{"row":4,"column":8},"end":{"row":4,"column":9},"action":"remove","lines":["A"]}],[{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"remove","lines":["\\"],"id":26},{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"remove","lines":["s"]},{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"remove","lines":["l"]},{"start":{"row":4,"column":11},"end":{"row":4,"column":12},"action":"remove","lines":["e"]},{"start":{"row":4,"column":10},"end":{"row":4,"column":11},"action":"remove","lines":["d"]},{"start":{"row":4,"column":9},"end":{"row":4,"column":10},"action":"remove","lines":["o"]},{"start":{"row":4,"column":8},"end":{"row":4,"column":9},"action":"remove","lines":["M"]}],[{"start":{"row":4,"column":8},"end":{"row":4,"column":9},"action":"insert","lines":["M"],"id":27},{"start":{"row":4,"column":9},"end":{"row":4,"column":10},"action":"insert","lines":["o"]},{"start":{"row":4,"column":10},"end":{"row":4,"column":11},"action":"insert","lines":["d"]},{"start":{"row":4,"column":11},"end":{"row":4,"column":12},"action":"insert","lines":["e"]}],[{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"insert","lines":["s"],"id":28}],[{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"remove","lines":["s"],"id":29}],[{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"insert","lines":["l"],"id":30},{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"insert","lines":["s"]},{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"insert","lines":["\\"]}],[{"start":{"row":0,"column":0},"end":{"row":20,"column":2},"action":"remove","lines":["<?php","","namespace App\\Http\\Controllers;","","use App\\Models\\Post;","use Illuminate\\Http\\Request;","","class PostController extends Controller","{","        /**","         * Post一覧を表示する","         * ","         * @param Post Postモデル","         * @return array Postモデルリスト","         */","        public function index(Post $post)","        {","            return $post->get();","        }","}","?>"],"id":31},{"start":{"row":0,"column":0},"end":{"row":15,"column":2},"action":"insert","lines":["<?php","","namespace App\\Http\\Controllers;","","use App\\Models\\Post;","use Illuminate\\Http\\Request;","","class PostController extends Controller","{","    public function index(Post $post)","    {","        return view('posts/index')->with(['posts' => $post->get()]);  ","       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。","    }","}","?>"]}],[{"start":{"row":9,"column":4},"end":{"row":13,"column":5},"action":"remove","lines":["public function index(Post $post)","    {","        return view('posts/index')->with(['posts' => $post->get()]);  ","       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。","    }"],"id":32},{"start":{"row":9,"column":4},"end":{"row":12,"column":1},"action":"insert","lines":["public function index(Post $post)","{","    return view('posts/index')->with(['posts' => $post->getByLimit()]);","}"]}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "],"id":33},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":11,"column":8},"end":{"row":11,"column":75},"action":"remove","lines":["return view('posts/index')->with(['posts' => $post->getByLimit()]);"],"id":36},{"start":{"row":11,"column":8},"end":{"row":12,"column":44},"action":"insert","lines":["return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);","　//getPaginateByLimit()はPost.phpで定義したメソッドです。"]}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":44},"action":"remove","lines":["　//getPaginateByLimit()はPost.phpで定義したメソッドです。"],"id":37},{"start":{"row":11,"column":83},"end":{"row":12,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":12,"column":5},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":38},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":4},"end":{"row":14,"column":0},"action":"insert","lines":["",""]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":14,"column":4},"end":{"row":24,"column":1},"action":"insert","lines":["/**"," * 特定IDのpostを表示する"," *"," * @params Object Post // 引数の$postはid=1のPostインスタンス"," * @return Reposnse post view"," */","public function show(Post $post)","{","    return view('posts/show')->with(['post' => $post]);"," //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。","}"],"id":39}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "],"id":40},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"insert","lines":["    "]},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "]},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "]},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "]},{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":23,"column":0},"end":{"row":23,"column":54},"action":"remove","lines":["     //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。"],"id":41},{"start":{"row":22,"column":59},"end":{"row":23,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":22,"column":10},"end":{"row":22,"column":59},"action":"remove","lines":["turn view('posts/show')->with(['post' => $post]);"],"id":42},{"start":{"row":22,"column":9},"end":{"row":22,"column":10},"action":"remove","lines":["e"]},{"start":{"row":22,"column":8},"end":{"row":22,"column":9},"action":"remove","lines":["r"]},{"start":{"row":22,"column":4},"end":{"row":22,"column":8},"action":"remove","lines":["    "]}],[{"start":{"row":22,"column":4},"end":{"row":22,"column":8},"action":"insert","lines":["    "],"id":43}],[{"start":{"row":22,"column":8},"end":{"row":22,"column":59},"action":"insert","lines":["return view('posts/show')->with(['post' => $post]);"],"id":44}],[{"start":{"row":14,"column":1},"end":{"row":19,"column":7},"action":"remove","lines":["   /**","     * 特定IDのpostを表示する","     *","     * @params Object Post // 引数の$postはid=1のPostインスタンス","     * @return Reposnse post view","     */"],"id":45},{"start":{"row":14,"column":0},"end":{"row":14,"column":1},"action":"remove","lines":[" "]},{"start":{"row":13,"column":4},"end":{"row":14,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":17,"column":5},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":46},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]},{"start":{"row":18,"column":4},"end":{"row":19,"column":0},"action":"insert","lines":["",""]},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":19,"column":4},"end":{"row":22,"column":1},"action":"insert","lines":["public function create()","{","    return view('posts/create');","}"],"id":47}],[{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "],"id":48},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "]},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":22,"column":5},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":49},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "]},{"start":{"row":23,"column":4},"end":{"row":24,"column":0},"action":"insert","lines":["",""]},{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":24,"column":4},"end":{"row":29,"column":1},"action":"insert","lines":["public function store(Request $request, Post $post)","{","    $input = $request['post'];","    $post->fill($input)->save();","    return redirect('/posts/' . $post->id);","}"],"id":50}],[{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "],"id":51},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]},{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"insert","lines":["    "]},{"start":{"row":28,"column":0},"end":{"row":28,"column":4},"action":"insert","lines":["    "]},{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":20},"action":"remove","lines":["use App\\Models\\Post;"],"id":52},{"start":{"row":6,"column":0},"end":{"row":6,"column":20},"action":"insert","lines":["use App\\Models\\Post;"]}],[{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"remove","lines":["",""],"id":53}],[{"start":{"row":5,"column":20},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":54}],[{"start":{"row":4,"column":28},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":55}],[{"start":{"row":6,"column":20},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":58}],[{"start":{"row":7,"column":0},"end":{"row":7,"column":34},"action":"insert","lines":["use App\\Http\\Requests\\PostRequest;"],"id":59}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"insert","lines":["/"],"id":60},{"start":{"row":4,"column":1},"end":{"row":4,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":4,"column":1},"end":{"row":4,"column":2},"action":"remove","lines":["/"],"id":61},{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"remove","lines":["/"]}],[{"start":{"row":0,"column":0},"end":{"row":33,"column":2},"action":"remove","lines":["<?php","","namespace App\\Http\\Controllers;","","use Illuminate\\Http\\Request;","","use App\\Models\\Post;","use App\\Http\\Requests\\PostRequest;","","class PostController extends Controller","{","    public function index(Post $post)","    {","        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);","    }","    ","    public function show(Post $post)","    {","        return view('posts/show')->with(['post' => $post]);","    }","    ","    public function create()","    {","        return view('posts/create');","    }","    ","    public function store(Request $request, Post $post)","    {","        $input = $request['post'];","        $post->fill($input)->save();","        return redirect('/posts/' . $post->id);","    }","}","?>"],"id":62},{"start":{"row":0,"column":0},"end":{"row":30,"column":1},"action":"insert","lines":["<?php","","namespace App\\Http\\Controllers;","","use App\\Models\\Post;","use App\\Http\\Requests\\PostRequest; // useする","","class PostController extends Controller","{","    public function index(Post $post)","    {","        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);","    }","","    public function show(Post $post)","    {","        return view('posts/show')->with(['post' => $post]);","    }","","    public function create()","    {","        return view('posts/create');","    }","","    public function store(Post $post, PostRequest $request) // 引数をRequestからPostRequestにする","    {","        $input = $request['post'];","        $post->fill($input)->save();","        return redirect('/posts/' . $post->id);","    }","}"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":30,"column":1},"end":{"row":30,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1667613977501,"hash":"03fb1475639d44ce0177f99684f4a7d98a64d5dc"}