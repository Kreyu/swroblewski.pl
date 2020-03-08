---
extends: _layouts.blog.post
section: content
title: Lorem Ipsum Title
tags: [tag1, tag2]
---

@paragraph
    Contrary to popular belief, Lorem Ipsum is not
    simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000
    years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the
    more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word
    in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and
    1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This
    book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem
    Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
@endparagraph

@quote
    Lorem Ipsum comes from sections 1.10.32 and
    1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This
    book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem
    Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
@endquote

@code(['lang' => 'php'])
    <?php

    use App\Entity\Payment\Payment;
    use Sylius\Component\Core\Repository\OrderRepositoryInterface;

    $order = $this->orderRepository->findOneByTokenValue($request->attributes->get('token'));

    $payment = $order->getLastPayment(Payment::STATE_NEW);
    $paymentMethod = $payment->getMethod();

    $storage = $this->payum->getStorage(get_class($payment));
    $storage->update($payment);
@endcode

@code(['lang' => 'yaml'])
    app_payum_payment_after_url:
        path: /payment/redirect
        controller: Symfony\Bundle\FrameworkBundle\Controller\RedirectController::urlRedirectAction
        defaults:
            path: '%payment.after_url%'
            permanent: true
@endcode
