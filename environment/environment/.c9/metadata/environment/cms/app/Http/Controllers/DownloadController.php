{"filter":false,"title":"DownloadController.php","tooltip":"/cms/app/Http/Controllers/DownloadController.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":40,"column":1},"action":"insert","lines":["<?php","namespace App\\Http\\Controllers;","use Illuminate\\Http\\Request;","use Illuminate\\Support\\Facades\\Storage;","use Zipper;","","class DownloadController extends Controller","{","      public function generate(Request $request)","      {","        $item = $request->all();","        $directory =  '/files';","        //ディレクトリ作成","        $directory_result = Storage::disk('local')->makeDirectory($directory);","        if ($directory_result) {","          //ファイルの内容","          $file_contents = '<?php echo \"sample\"; ?>'","          //サンプルファイルの作成","          $file_written = Storage::disk('local')->put($directory . '/sample.php', $file_contents);","          $download_path = $this->download($directory);","          if (!empty($download_path)) {","            //ファイルをダウンロード","            return response()->download($download_path)->deleteFileAfterSend(true);","          }else {","            return false;","          }","        }","      }","","      private function download($directory)","      {","        if (Storage::disk('local')->exists('sample.zip')) Storage::disk('local')->delete('sample.zip');","        Zipper::make($zip_path)->add(storage_path('app' . $directory))->close();","        return storage_path('app/sample.zip');","      }","","      public function basePath()","      {","        return url('/');","      }","}"],"id":1}]]},"ace":{"folds":[],"scrolltop":365,"scrollleft":0,"selection":{"start":{"row":40,"column":1},"end":{"row":40,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":123,"mode":"ace/mode/php"}},"timestamp":1631002726026,"hash":"1c0b6982297df54891272bea2663f42bb05d7b85"}