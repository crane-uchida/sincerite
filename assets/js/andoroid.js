(() => {
    // Androidの場合に行う処理

    // headタグにGoogle Fontsを読み込むスクリプトを動的に生成
    const setupAndroid = () => {
        const e = document.createElement("link");
        e.rel = "preconnect", e.href = "https://fonts.googleapis.com", document.head.appendChild(e);
        const t = document.createElement("link");
        t.rel = "preconnect", t.href = "https://fonts.gstatic.com", t.crossOrigin = "anonymous", document.head.appendChild(t);
        const n = document.createElement("link");
        n.rel = "stylesheet", n.href = "https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400&display=swap", document.head.appendChild(n);
        // bodyにクラスを付与する
        window.addEventListener('DOMContentLoaded', () => {
            document.body.classList.add('ua-android');
        });
    }

    // UA-CH に対応しているブラウザと非対応のブラウザで処理を分ける
    const userAgentData = navigator.userAgentData;
    console.log(userAgentData);

    // UA-CHで取得できた場合の処理
    if (userAgentData) {
        console.log('このブラウザはUA-CHに対応しています');
        const deviceInfo = userAgentData.platform;

        // Androidの場合 Google Fontsを読み込むスクリプトを実行
        if (deviceInfo === 'Android') {
            console.log('あなたのデバイスはAndroidです');
            setupAndroid();
        }
    }

    // UA-CHに対応していない場合はUAParser.jsを利用する
    else {
        console.log('このブラウザはUA-CHに対応していません');
        const parser = UAParser();
        const osInfo = parser.os.name; // OSの名前を取得

        // Androidの場合 Google Fontsを読み込むスクリプトを実行
        if (osInfo === 'Android') {
            console.log('あなたのデバイスはAndroidです');
            setupAndroid();
        }
    }
})();