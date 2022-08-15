<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\Entity\User;
use App\Model\Table\TweetsTable;
use Cake\ORM\TableRegistry;
use Cake\Utility\Text;

/**
 * Profile Controller
 *
 * @method \App\Model\Entity\Profile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfileController extends AppController
{
    /**
     * Edit method
     *
     * @param string|null $id Profile id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit()
    {
        /** @var User $user */
        $user = $this->Authentication->getIdentity();
        /** @var TweetsTable $tweetsTable */
        $this->set(['user' => $user]);
    }

    public function file()
    {
        if ($this->request->is('post')) {
            $file = $this->request->getData("file");
            if ($file != "undefind" && $file->getClientMediaType() != '') {
                $type = $file->getClientMediaType();
                $extension = '';
                switch ($type) {
                    case 'image/jepg':
                        $extension = '.jpg';
                        break;
                    case 'image/png':
                        $extension = '.png';
                }
                $land = Text::uuid();
                $filePath = WWW_ROOT . "/img/" . $land . $extension;
                $file->moveTo($filePath);
            }
        }
    }
}
