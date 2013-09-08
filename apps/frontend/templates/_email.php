<html>
    <head></head>
    <body>
        <style>
            table#messageTable{
                width: 100%;
                border: 1px solid black;
            }

            table#messageTable td {
                padding: 0.5em;
            }
        </style>
        <p>You've received a new message from http://lukasautohandel.de</p>

        <table id='messageTable'>
            <tbody>
                <tr style='background-color: lightgray'>
                    <td>From:</td>
                    <td><strong><?= $name; ?> [<a href="mailto:<?= $email; ?>"><?= $email; ?></a>]</strong></td>
                </tr>
                <tr style='background-color: lightgray'>
                    <td>Phone:</td>
                    <td><strong><?= $phone; ?></strong></td>
                </tr>
                <? if (isset($car)): ?>
                    <tr style='background-color: lightgray'>
                        <td>Car:</td>
                        <td><a href="<?= url_for("@show?id=" . $car->getId() . "&slug=" . $car->getSlug(),true); ?>"><?= $car->getTitle(); ?></a></td>
                    </tr>
                <? endif; ?>
                <tr>
                    <td>Message:</td>
                    <td><?= $body; ?></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>