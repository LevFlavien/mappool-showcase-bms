<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function showLastUploaded()
    {
        $chart = $this->getLastUploaded();

        if ($chart === '') {
            return 'no chart found.';
        }

        return view('chart', json_decode($chart, true));
    }

    public function upload()
    {
        return view('upload', ['savedChart' => $this->getLastUploaded()]);
    }

    public function save(Request $request)
    {
        if ($file = $request->file('chart')) {
            $file->move('charts', 'chart.json');
        }

        return redirect('upload');
    }

    private function getLastUploaded(): string
    {
        try {
            return file_get_contents('charts/chart.json');
        } catch (\Exception $e) {
            return '';
        }
    }
}
