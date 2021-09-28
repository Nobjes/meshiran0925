{"filter":false,"title":"2021_09_15_125545_create__maps_table.php","tooltip":"/cms/database/migrations/2021_09_15_125545_create__maps_table.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":31,"column":0},"action":"remove","lines":["<?php","","use Illuminate\\Database\\Migrations\\Migration;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Support\\Facades\\Schema;","","class CreateMapsTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('maps', function (Blueprint $table) {","            $table->bigIncrements('id');","            $table->timestamps();","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('maps');","    }","}",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":45,"column":0},"action":"insert","lines":["<?php","","use Illuminate\\Database\\Migrations\\Migration;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Support\\Facades\\Schema;","","class CreateMapsTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('maps', function (Blueprint $table) {","            $table->bigIncrements('id');","            $table->unsignedBigInteger('user_id');","            $table->unsignedBigInteger('post_id');","            $table->unsignedBigInteger('area_id');","            $table->unsignedBigInteger('restaurant_id');","            $table->unsignedBigInteger('follow_id');","            ","            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');","            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');","            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');","            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');","            $table->foreign('follow_id')->references('id')->on('follows')->onDelete('cascade');","            $table->unique(['user_id', 'post_id','area_id','restaurant_id','follow_id'],'uq_roles'); //Laravelは複合主キーが扱いにくいのでユニークで代用","       });","    }","","","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","     ","    public function down()","    {","        Schema::dropIfExists('maps');","    }","}",""]}]]},"ace":{"folds":[],"scrolltop":549,"scrollleft":0,"selection":{"start":{"row":26,"column":42},"end":{"row":26,"column":42},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":33,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1631710553305,"hash":"47687e641771a46b909e4d012be0481a787024d9"}