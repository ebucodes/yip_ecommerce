<?php
/* Smarty version 5.5.1, created on 2025-06-16 14:04:46
  from 'file:layouts/website/js.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6850247ea8e8e1_89030084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02f511e6f42d4c6db996718fb2f7364e8565bf2c' => 
    array (
      0 => 'layouts/website/js.tpl',
      1 => 1750082683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6850247ea8e8e1_89030084 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/chukwuebuka-ohaji/workspace/technical_tests/e-shop (Copy)/resources/views/smarty/templates/layouts/website';
?><!-- Vendor Custom -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('websiteAssetsUrl');?>
/js/vendor/jquery-3.6.4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('websiteAssetsUrl');?>
/js/vendor/jquery.zoom.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('websiteAssetsUrl');?>
/js/vendor/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('websiteAssetsUrl');?>
/js/vendor/mixitup.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('websiteAssetsUrl');?>
/js/vendor/range-slider.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('websiteAssetsUrl');?>
/js/vendor/aos.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('websiteAssetsUrl');?>
/js/vendor/swiper-bundle.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('websiteAssetsUrl');?>
/js/vendor/slick.min.js"><?php echo '</script'; ?>
>
<!-- Main Custom -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('websiteAssetsUrl');?>
/js/main.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('validationJsUrl');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('accountAssetsUrl');?>
/js/vendor/sweetalert2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    <?php if ((true && ($_smarty_tpl->hasVariable('errors') && null !== ($_smarty_tpl->getValue('errors') ?? null))) && $_smarty_tpl->getValue('errors')) {?>
        Swal.fire({
            icon: 'error',
            text: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('implode')($_smarty_tpl->getValue('errors'),"\n");?>
',
            showConfirmButton: false,
            timer: 5000
        });
    <?php } elseif ($_smarty_tpl->getValue('sessionError')) {?>
        Swal.fire({
            icon: 'error',
            // toast:'true',
            text: '<?php echo $_smarty_tpl->getValue('sessionError');?>
',
            showConfirmButton: false,
            timer: 3000
        });
    <?php } elseif ($_smarty_tpl->getValue('sessionSuccess')) {?>
        Swal.fire({
            icon: 'success',
            // toast:'true',
            // position: 'top',
            text: '<?php echo $_smarty_tpl->getValue('sessionSuccess');?>
',
            showConfirmButton: true,
            timer: 3000
        });
    <?php } elseif ($_smarty_tpl->getValue('sessionInfo')) {?>
        Swal.fire({
            icon: 'info',
            text: '<?php echo $_smarty_tpl->getValue('sessionInfo');?>
',
            showConfirmButton: false,
            timer: 3000
        });
    <?php }
echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    function showConfirmation(form, event, actionType) {
        event.preventDefault(); // Prevent default form submission behavior

        let titleText = '';
        let buttonText = '';

        switch (actionType) {
            case 'submit':
                titleText = 'Are you sure you want to submit?';
                buttonText = 'Submit';
                break;
            case 'delete':
                titleText = 'Are you sure you want to delete?';
                buttonText = 'Delete';
                break;
            case 'update':
                titleText = 'Are you sure you want to update?';
                buttonText = 'Update';
                break;
            case 'approve':
                titleText = 'Are you sure you want to approve?';
                buttonText = 'Approve';
                break;
            case 'reject':
                titleText = 'Are you sure you want to reject?';
                buttonText = 'Reject';
                break;
                // Add more cases for other actions if needed

            default:
                console.log('Invalid action type');
                return;
        }

        if (form.checkValidity()) {
            Swal.fire({
                title: titleText,
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: buttonText
            }).then((result) => {
                if (result.isConfirmed) {
                    // If user clicks Yes, show "Please wait" dialog
                    Swal.fire({
                        title: 'Please wait...',
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        onBeforeOpen: () => {
                            Swal.showLoading(); // Show loading spinner
                        }
                    });
                    // Submit the form
                    form.submit();
                }
            });
        } else {
            // If form validation fails, you can handle it here (e.g., show error messages)
            <?php if ((true && ($_smarty_tpl->hasVariable('errors') && null !== ($_smarty_tpl->getValue('errors') ?? null))) && $_smarty_tpl->getValue('errors')) {?>
                Swal.fire({
                    icon: 'error',
                    title: 'Validation Error',
                    html: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('implode')($_smarty_tpl->getValue('errors'),"<br>");?>
',
                    showConfirmButton: true,
                    confirmButtonColor: "#23346A",
                });
            <?php }?>
            // Optionally, you can skip showing the confirmation dialog in this case.
            console.log('Form validation failed');
        }
    }
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    
        // JavaScript to handle quantity change events
        const quantityInputs = document.querySelectorAll('.quantity');

        quantityInputs.forEach(input => {
            input.addEventListener('change', function() {
                const quantity = parseInt(this.value);
                const productId = this.dataset.productId;
                updateTotal(productId, quantity);
            });
        });

        function updateTotal(productId, quantity) {
            // Perform AJAX request to update total
            fetch(`/update-total?product_id=${productId}&quantity=${quantity}`)
            .then(response => response.json())
                .then(data => {
                    // Update total in the corresponding table cell
                    const totalCell = document.querySelector(`.quantity[data-product-id="${productId}"]`).parentNode.nextElementSibling;
                    totalCell.textContent = `$${data.total.toFixed(2)}`;
                })
                .catch(error => console.error('Error:', error));
        }
    
<?php echo '</script'; ?>
><?php }
}
