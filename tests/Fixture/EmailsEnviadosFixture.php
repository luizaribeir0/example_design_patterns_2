<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmailsEnviadosFixture
 */
class EmailsEnviadosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'destinatario' => 'Lorem ipsum dolor sit amet',
                'assunto' => 'Lorem ipsum dolor sit amet',
                'mensagem' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'provider' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-09-17 01:06:00',
            ],
        ];
        parent::init();
    }
}
