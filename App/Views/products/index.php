<?php include(VIEWS . 'inc' . DS . 'header.php'); ?>

<h1 class="text-center  my-5 py-3">View All Products </h1>

<div class="container">
    <div class="row">
        <div class="col-10 mx-auto p-4 border mb-5">
            <?php if (isset($success)) : ?>
                <h3 class="alert alert-success text-center"><?php echo $success; ?></h3>
            <?php endif; ?>
            <?php if (isset($error)) : ?>
                <h3 class="alert alert-danger text-center"><?php echo $error; ?></h3>
            <?php endif; ?>


            <div class="row">



                <?php foreach ($products as $row) :  ?>
                    <div class="col-lg-4">
                        <div class="card" style="width: 18rem;">

                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['name'] ?> - <?php echo $row['price'] ?> $</h5>
                                <p class="card-text"><?php echo $row['description'] ?></p>

                                <a class="btn btn-danger" href="<?php url('/products/delete/' . $row['id']) ?>"> del </a>


                                <a href="<?php url('/products/edit/' . $row['id']) ?>" class="btn btn-info">edit</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        </tbody>
        </table>




    </div>
</div>
</div>
<?php include(VIEWS . 'inc' . DS . 'footer.php'); ?>