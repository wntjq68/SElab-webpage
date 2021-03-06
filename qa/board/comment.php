<?php
$sql = 'select * from comment_free where co_no=co_order and b_no=' . $bNo;
$result = $db->query($sql);
?>
<div id="commentView">
    <form action="comment_update.php" method="post">
        <input type="hidden" name="bno" value="<?php echo $bNo ?>">
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
            <ul class="oneDepth">
                <!---1depth 댓글 출력--->
                <!-- <?php $_SESSION['co_no'] = 1; ?>  -->
                <li>
                    <div id="co_<?php echo $row['co_no'] ?>" class="commentSet">
                        <div class="commentInfo">
                            <div class="commentId">Name:
                                <span class="coId"><?php echo $row['co_id'] ?></span>
                            </div>
                            <div class="commentBtn">
                                <a href="#" class="comt write">Comment</a>
                                <a href="#" class="comt modify">Modify</a>
                                <a href="#" class="comt delete">Delete</a>
                            </div>
                            
                        </div>
                        <div style="white-space:pre; " class="commentContent"><?php echo nl2br($row['co_content']) ?></div>
                    </div>
                    <?php
                    $sql2 = 'select * from comment_free where co_no!=co_order and co_order=' . $row['co_no'];
                    $result2 = $db->query($sql2);

                    while ($row2 = $result2->fetch_assoc()) {
                    ?>
                        <ul class="twoDepth">
                            <!---2depth 댓글 출력--->
                            <li>
                                <div id="co_<?php echo $row2['co_no'] ?>" class="commentSet">
                                    <div class="commentInfo">
                                        <div class="commentId">Name:
                                            <span class="coId"><?php echo $row2['co_id'] ?></span></div>
                                        <div class="commentBtn">
                                            <a href="#" class="comt modify">Modify</a>
                                            <a href="#" class="comt delete">Delete</a>
                                        </div>
                                    </div>
                                    <div style="white-space:pre;" class="commentContent"><?php echo nl2br($row2['co_content']) ?></div>
                                </div>
                            </li>
                        </ul>
                    <?php
                    }
                    ?>
                </li>
            </ul>
        <?php } ?>
    </form>

</div>
<hr>
<form action="comment_update.php" method="post">
    <!------댓글 작성 폼 ------>
    <input type="hidden" name="bno" value="<?php echo $bNo ?>">
    <p>Your Answer</p>
    <table>
        <tbody>
            <tr>
                <th scope="row">
                    <label for="coId">ID</label>
                </th>
                <td><input type="text" name="coId" id="coId"></td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="coPassword">Password</label>
                </th>
                <td><input type="password" name="coPassword" id="coPassword"></td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="coContent">Contents</label>
                </th>
                <td>
                    <textarea name="coContent" id="coContent"></textarea>
                </td>
            </tr>
        </tbody>
        <div class="cobtnSet">
            <input type="submit" value="comment write"></div>
    </table>
</form>

<script>
    $(document).ready(function() {
        var commentSet = '';
        var action = '';
        $('#commentView').delegate('.comt', 'click', function() {
            //현재 작성 내용을 변수에 넣음
            commentSet = $(this)
                .parents('.commentSet')
                .html();
            $(this)
                .parents('.commentSet')
                .addClass('active');

            //취소 버튼
            var commentBtn = '<a href="#" class="addComt cancel">Cancel</a>';

            //버튼 삭제 및 추가
            $('.comt').hide();
            $(this)
                .parents('.commentBtn')
                .append(commentBtn);

            //commentInfo의 ID를 가져옴
            var co_no = $(this)
                .parents('.commentSet')
                .attr('id');

            //전체 길이에서 3("co_")를 뺀 나머지가 co_no
            co_no = co_no.substr(3, co_no.length);

            var addOption = '<input type="hidden" name="co_no" value="' + co_no + '">';

            // 변수 초기화
            var comment = '';
            var coId = '';
            var coContent = '';

            if ($(this).hasClass('write')) {
                //comment 쓰기
                action = 'w';
                //ID 영역 출력
                coId = '<input type="text" name="coId" id="coId">';

            } else if ($(this).hasClass('modify')) {
                //comment 수정
                action = 'u';
                $(this).parents('.commentBtn');

                var modifyParent = $(this).parents('.commentSet');
                var coId = modifyParent
                    .find('.coId')
                    .text();
                var coContent = modifyParent
                    .find('.commentContent')
                    .text();

            } else if ($(this).hasClass('delete')) {
                //comment 삭제
                action = 'd';

            }

            comment += '<div class="writeComment">';
            comment += '	<input type="hidden" name="w" value="' + action + '">';
            comment += addOption;
            comment += '	<table>';
            comment += '		<tbody>';
            if (action !== 'd') {
                comment += '			<tr>';
                comment += '				<th scope="row"><label for="coId">ID</label></th>';
                comment += '				<td>' + coId + '</td>';
                comment += '			</tr>';
            }
            comment += '			<tr>';
            comment += '				<th scope="row">';
            comment += '			<label for="coPassword">Password</label></th>';
            comment += '				<td><input type="password" name="coPassword" id="coPassword"></td>';
            comment += '			</tr>';
            if (action !== 'd') {
                comment += '			<tr>';
                comment += '				<th scope="row"><label for="coContent">Contents</label></th>';
                comment += '				<td><textarea name="coContent" id="coContent">' + coContent + '</textarea>' +
                    '</td>';
                comment += '			</tr>';
            }
            comment += '		</tbody>';
            comment += '	</table>';
            comment += '	<div class="btnSet">';
            comment += '		<input type="submit" value="확인">';
            comment += '	</div>';
            comment += '</div>';

            $(this)
                .parents('.commentSet')
                .after(comment);
            return false;
        });

        $('#commentView').delegate(".cancel", "click", function() {
            if (action == 'w') {
                $('.writeComment').remove();
            } else if (action == 'u') {
                $('.writeComment').remove();
            }
            $('.commentSet.active').removeClass('active');
            $('.addComt').remove();
            $('.comt').show();
            return false;
        });
    });
</script>