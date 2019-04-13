<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', 'http://localhost/qr-code-authentication/public/api/qrcodes',[
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImUxMjYxNjhkZjkyNTQyOTkxMWRhM2YyZWEzYzMzN2YyMDlmYzc2YTA2MjEwOWMyZmZlMzE4NzljOTc0YzViOTVjOTMxYjU3MDc0MWI3ZTFlIn0.eyJhdWQiOiI0IiwianRpIjoiZTEyNjE2OGRmOTI1NDI5OTExZGEzZjJlYTNjMzM3ZjIwOWZjNzZhMDYyMTA5YzJmZmUzMTg3OWM5NzRjNWI5NWM5MzFiNTcwNzQxYjdlMWUiLCJpYXQiOjE1NTM4NjA3OTUsIm5iZiI6MTU1Mzg2MDc5NSwiZXhwIjoxNTg1NDgzMTk0LCJzdWIiOiIzIiwic2NvcGVzIjpbXX0.HWiYKLJ96X8jjg8Ot6AwWD79PsqbCvnAWltBWJe9TC3i6zniVHz-qITX73Ek3KJ34KMTYzGGikXE_c2S5X7iHNRuSyCmd7iOJbpSrl3PJm0tTFijjWhkq-gvDOJ1ZuZUSyT4LUPuMwXrhTAHx6H_pApUIMQ9B2Ie2-CFDtkUH_bxpCR9y8_B-wd5RQYXYbsNosGeAy7Had5i5UrmW5euIV2ylH0SfB8S4gLvjTwKxNUXXTtCOOoAfBGnC9h6rTw6Vv6JX76-lqLi_VoAEuLyZu3fqMnFuUncJ6e1Q6dJiApV-l3g4GSrqXt3VFHGqVfPsCS5IuWMOO7hPAgMW7-Wv9Q3PyNLfOnhCAXqaxdo8LI0gg0EKMWnhfn_JlFL-HyPwGe_MWdf-0Z-tuDi722KWSA-nm-zNC_saL-9knl80vof1eBSkzoP9k94igFkUpl2Jd8CIsha88lcWkHAkcjjwVqhW3MRaxO3eOEXtEw_zkJhZGv5qnHUN-MengqoPXyV6V65G6fURbqXxhi-mcYfwZWBqOSJxhfQMvhcWj98L6nWDSC8vgdBbOdoTLtg5Nlnqhy5Jh6N3LJEop4zqx-NrDkTSH_O5xWTApUS8EYjiL5aMf1HDUQ7DJd-OuRKovtVpq0oJTWg8lgxL5ZbvC2sZcm52NduzZLMRF0sY3I0gqI'
            ]
        ]);

        $qrcodes = json_decode((string) $res->getBody(), true);
        return view('products.index')->with('qrcodes', $qrcodes);
    }

    public function show(Request $request)
    {
        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', 'http://localhost/qr-code-authentication/public/api/qrcodes/'.$request->id,[
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImUxMjYxNjhkZjkyNTQyOTkxMWRhM2YyZWEzYzMzN2YyMDlmYzc2YTA2MjEwOWMyZmZlMzE4NzljOTc0YzViOTVjOTMxYjU3MDc0MWI3ZTFlIn0.eyJhdWQiOiI0IiwianRpIjoiZTEyNjE2OGRmOTI1NDI5OTExZGEzZjJlYTNjMzM3ZjIwOWZjNzZhMDYyMTA5YzJmZmUzMTg3OWM5NzRjNWI5NWM5MzFiNTcwNzQxYjdlMWUiLCJpYXQiOjE1NTM4NjA3OTUsIm5iZiI6MTU1Mzg2MDc5NSwiZXhwIjoxNTg1NDgzMTk0LCJzdWIiOiIzIiwic2NvcGVzIjpbXX0.HWiYKLJ96X8jjg8Ot6AwWD79PsqbCvnAWltBWJe9TC3i6zniVHz-qITX73Ek3KJ34KMTYzGGikXE_c2S5X7iHNRuSyCmd7iOJbpSrl3PJm0tTFijjWhkq-gvDOJ1ZuZUSyT4LUPuMwXrhTAHx6H_pApUIMQ9B2Ie2-CFDtkUH_bxpCR9y8_B-wd5RQYXYbsNosGeAy7Had5i5UrmW5euIV2ylH0SfB8S4gLvjTwKxNUXXTtCOOoAfBGnC9h6rTw6Vv6JX76-lqLi_VoAEuLyZu3fqMnFuUncJ6e1Q6dJiApV-l3g4GSrqXt3VFHGqVfPsCS5IuWMOO7hPAgMW7-Wv9Q3PyNLfOnhCAXqaxdo8LI0gg0EKMWnhfn_JlFL-HyPwGe_MWdf-0Z-tuDi722KWSA-nm-zNC_saL-9knl80vof1eBSkzoP9k94igFkUpl2Jd8CIsha88lcWkHAkcjjwVqhW3MRaxO3eOEXtEw_zkJhZGv5qnHUN-MengqoPXyV6V65G6fURbqXxhi-mcYfwZWBqOSJxhfQMvhcWj98L6nWDSC8vgdBbOdoTLtg5Nlnqhy5Jh6N3LJEop4zqx-NrDkTSH_O5xWTApUS8EYjiL5aMf1HDUQ7DJd-OuRKovtVpq0oJTWg8lgxL5ZbvC2sZcm52NduzZLMRF0sY3I0gqI'
            ]
        ]);

        $qrcode = json_decode((string) $res->getBody(), true);

        return view('products.show')->with('qrcode', $qrcode);
    }
}
