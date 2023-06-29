<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div id="app">
        <div class="main">
            <div class="header">
                <div id="logo">
                    <img src="/image/Screenshot 2023-06-28 122404.png" alt="">
                </div>
                <div id="avatar">
                    <label for="" style="margin-top:5px;align-content: center;color: #C0C0C0 "><I>Handicrafted
                            by</I><br /><b style="color:#808080;margin-left: 40%">Jim HLS</b></label>
                    <img src="/image/Screenshot 2023-06-28 123253.png" alt="">
                </div>
            </div>
            <div class="banner">
                <div id="content">
                    {{-- A joke a day keeps the doctor away --}}
                    <h2>
                        <?php
                        echo !is_null($joke) ? $joke->name : 'That\'s all the jokes for today! Come back another day!';
                        ?>
                    </h2>
                    {{-- If you joke wrong way, your teeth have a to pay(Serious) --}}
                    <p>
                        <?php
                        echo !is_null($joke) ? $joke->note : '';
                        ?>
                    </p>
                </div>
            </div>
            <div class="content">
                <div id="main">
                    <div id="content">
                        {{-- Adam and eva Để căn giữa một phần
                            tử khối theo chiều ngang (như div), sử dụng margin: auto ; Thiết lập chiều rộng của phần tử sẽ
                            ngăn phần tử đó kéo dài ra các cạnh của vùng chứa. Sau đó, phần tử chiếm chiều rộng được chỉ
                            định và không gian còn lại sẽ được chia đều giữa hai lề. --}}
                        <label style="font-size:17px;color:#707070; font-family: Arial;">
                            <?php
                            echo !is_null($joke) ? $joke->content : '';
                            ?> </label>
                    </div>
                    <hr style="width: 70%; color:#C0C0C0	; margin-left: 15%">
                    {{-- color:#D0D0D0;  --}}
                    <form action="/vote/{{(is_null($joke))?null:$joke->id}}". method="get">
                        <div id="button">
                            {{-- <input type="text" joke="{{$joke->id}}" hidden> --}}
                            <button type="submit" name="like" class="button1">This is Funny!</button>
                            <button type="submit" name="dislike" class="button2">This is not Funny.</button>
                    </form>
                </div>
            </div>

        </div>
        <div class="footer">
            <div id="content">
                <label style="font-size:15px;color:#888888 ">
                    This website is created as part of Hlsolution progam. The meterials containerd on this website are
                    providerd for general <br />information only and do not constitute any form of advice.HLS assumes no
                    responsibility for the accurency of any particular statement and <br />accepts no liability for any
                    loss or damage which may arise from reliance on the information contained on the site.</label>
                <p style="font-size:15px;color:#808080	 "><b> Copyright 2021 HLS</b></p>
            </div>
        </div>
    </div>

    </div>

</body>

</html>
