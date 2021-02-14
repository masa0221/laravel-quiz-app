require('./bootstrap');

// HTMLの読み込みが終わった後に実行される処理を設定
window.addEventListener('DOMContentLoaded', function(event) {
    // delete-quiz の class があたっているタグ(ボタン)をすべて取得(配列)
    let deleteButtons = document.querySelectorAll('.delete-quiz');

    // ボタンを一つずつ処理する
    deleteButtons.forEach(deleteButton => {
        // ボタンにクリックイベントを追加
        deleteButton.addEventListener('click', function (event) {
            let quizId = this.dataset.id;

            // 削除前の確認を表示
            if (!confirm('id:' + quizId + ' のQuizを削除します\nよろしいですか?')) {
                return;
            }

            // ボタンのタグについている属性data-idに設定されている値(data-idの値)をURLにしてサーバーにリクエスト
            // リクエストメソッドが DELETE で送信
            // axios https://github.com/axios/axios
            axios.delete('/quizzes/' + quizId)
                .then(function (response) {
                    // リクエストが正常に処理された場合

                    // テーブルから消す
                    let row = event.target.closest("tr");
                    row.parentNode.removeChild(row);

                    // メッセージ表示
                    alert('削除しました')
                    console.log(response);
                })
                .catch(function (error) {
                    // リクエストで何らかのエラーが発生した場合
                    alert(error)
                    console.log(error);
                });
        });
    });
});
