<?php

    require_once('../../../private/initialize.php');

    if (!isset($_GET['id'])) {
     redirect_to(url_for('/staff/pages/index.php'));
    }
    $id = $_GET['id'];

    if (is_post_request()) {
        $result = delete_page($id);
        redirect_to(url_for('/staff/pages/index.php'));

    } else {
        $page = find_page_by_id($id);
    }

?>

<?php $page_title = 'Delete Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

    <div id="content">

        <a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

        <div class="page delete">
            <h2>Delete Page</h2>
            <p>Are you sure you want to delete this page?</p>
            <p class="item"><b><?php echo h($page['menu_name']); ?></b></p>

            <form action="<?php echo url_for('/staff/pages/delete.php?id=' . h(u($page['id']))); ?>" method="post">
                <div id="operations">
                    <input type="submit" name="commit" value="Delete Subject" />
                </div>
            </form>
        </div>
    </div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>