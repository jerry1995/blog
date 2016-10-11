<?php
/**
 * Created by PhpStorm.
 * User: hp-dv4-
 * Date: 2016/9/3 0003
 * Time: 14:19
 */

// src/Controller/ArticlesController.php
namespace App\Controller;

class ArticlesController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash'); // Include the FlashComponent
    }

    public function index()
    {
        $this->viewBuilder()->layout(false);
		$articles = $this->Articles->find('all');
        $this->set(compact('articles'));
        $categories = $this->Articles->Categories->find('all');
        $this->set(compact('categories'));
		$this->set('title','博文');
    }

    public function view($id = null)
    {
        $this->viewBuilder()->layout('mylayout');
        $article = $this->Articles->get($id);
        $this->set(compact('article'));
    }

    public function add()
    {
        $article = $this->Articles->newEntity();
        if ($this->request->is('post')) {
            $article = $this->Articles->patchEntity($article, $this->request->data);
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('Your article has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your article.'));
        }
        $this->set('article', $article);
        // Just added the categories list to be able to choose
        // one category for an article
        $categories = $this->Articles->Categories->find('treeList');
        $this->set(compact('categories'));
    }

    public function edit($id = null)
    {
        $this->viewBuilder()->layout(false);
		$article = $this->Articles->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Articles->patchEntity($article, $this->request->data);
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('Your article has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your article.'));
        }
        $this->set('article', $article);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);
        $article = $this->Articles->get($id);
        if ($this->Articles->delete($article)) {
            $this->Flash->success(__('The article with id: {0} has been deleted.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
	
	public function category($t_category=null){
        $this->viewBuilder()->layout(false);
		if($t_category==null){
			$articles = $this->Articles->find('all');
		}
		else{
			$articles = $this->Articles->find('list',['keyField'=>$t_category]);
		}
		
        $this->set(compact('articles'));
        $categories = $this->Articles->Categories->find('all');
        $this->set(compact('categories'));
		$this->set('title','博文');
		$this->render('index');
	}

}