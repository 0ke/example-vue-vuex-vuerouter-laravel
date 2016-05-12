

<template>


  				<div class="container clearfix">
  					<div id="tasks">

  						<div class="col-md-6">

  							<form @submit.prevent="addTask">
  								<div class="form-group">
  									<input v-model="newTask"
  										   v-el="newTask"
  										   class="form-control"
  										   placeholder="verzin een taak"></input>

  									<button class="button button-blue topmargin-sm">toevoegen</button>

  								</div>
  							</form>



  							<pre>{{ $data | json }}</pre>
  						</div>

  						<div class="col-md-6">
  							<div v-show="remaining.length">
  								<h1>Taken ({{ remaining.length }}) <button @click="completeAll" class="button pull-right">Check allemaal</button></h1>

  								<ol class="list-group">
  									<li v-for="task in tasks  | inProcess | orderBy 'text'" class="list-group-item">
  										<span @dblclick="editTask(task)">{{ task.text }}</span>

  										<div class="pull-right">
  											<i @click="removeTask(task)" class="fa fa-times"></i>
  											<i @click="toggleTaskCompletion(task)" class="icon-check-empty leftmargin-sm"></i>
  										</div>

  									</li>
  								</ol>
  							</div>

  							<div v-show="completions.length && remaining.length" class="divider divider-short divider-center"><i class="icon-folder-check"></i></div>

  							<div v-show="completions.length">
  								<h2>Gedaan ({{ completions.length }}) <button @click="clearCompleted" class="button button-red pull-right">Verwijder onderstaande</button></h2>

  								<ol class="list-group">
  									<li v-for="task in tasks | filterBy true in 'done' | orderBy 'text'" class="list-group-item">
  										<span @dblclick="editTask(task)">{{ task.text }}</span>

  										<div class="pull-right">
  											<i @click="removeTask(task)" class="fa fa-times"></i>
  											<i @click="toggleTaskCompletion(task)" class="icon-checkbox-checked leftmargin-sm"></i>
  										</div>

  									</li>
  								</ol>
  							</div>
  						</div>


  						<div class="col-md-12">
    						<h3>Vue code</h3>

<pre>
export default {
    data() {
            return {
                tasks: [{
                    text: 'Ruim de tafel af',
                    done: false
                }, {
                    text: 'Doe de afwas',
                    done: true
                }, {
                    text: 'Zet het vuilnis buiten',
                    done: false
                }, {
                    text: 'Doe uw riem aan',
                    done: true
                }, {
                    text: 'Blijf van de chokotoffs af',
                    done: false
                }, {
                    text: 'Breng mij een pintje',
                    done: true
                }],
                newTask: ''
            }
        },

        computed: {
            completions: function() {
                return this.tasks.filter(function(task) {
                    return task.done;
                });
            },

            remaining: function() {
                return this.tasks.filter(function(task) {
                    return !task.done;
                });
            }
        },


        filters: {
            inProcess: function(tasks) {
                return tasks.filter(function(task) {
                    return !task.done;
                });
            }
        },


        methods: {
            addTask: function(e) {
                e.preventDefault();

                if (!this.newTask) return;

                this.tasks.push({
                    text: this.newTask,
                    done: false
                });

                this.newTask = '';
            },

            editTask: function(task) {
                this.removeTask(task);
                this.newTask = task.text;
            },

            toggleTaskCompletion: function(task) {
                task.done = !task.done;
            },

            completeAll: function() {
                this.tasks.forEach(function(task) {
                    task.done = true;
                });
            },

            removeTask: function(task) {
                this.tasks.$remove(task);
            },

            clearCompleted: function() {
                this.tasks = this.tasks.filter(function(task) {
                    return !task.done;
                });
            }
        }
}
</pre>
            </div>
          </div>

</template>

<script>

export default {
    data() {
            return {
                tasks: [{
                    text: 'Ruim de tafel af',
                    done: false
                }, {
                    text: 'Doe de afwas',
                    done: true
                }, {
                    text: 'Zet het vuilnis buiten',
                    done: false
                }, {
                    text: 'Doe uw riem aan',
                    done: true
                }, {
                    text: 'Blijf van de chokotoffs af',
                    done: false
                }, {
                    text: 'Breng mij een pintje',
                    done: true
                }],
                newTask: ''
            }
        },

        computed: {
            completions: function() {
                return this.tasks.filter(function(task) {
                    return task.done;
                });
            },

            remaining: function() {
                return this.tasks.filter(function(task) {
                    return !task.done;
                });
            }
        },


        filters: {
            inProcess: function(tasks) {
                return tasks.filter(function(task) {
                    return !task.done;
                });
            }
        },


        methods: {
            addTask: function(e) {
                e.preventDefault();

                if (!this.newTask) return;

                this.tasks.push({
                    text: this.newTask,
                    done: false
                });

                this.newTask = '';
            },

            editTask: function(task) {
                this.removeTask(task);
                this.newTask = task.text;
            },

            toggleTaskCompletion: function(task) {
                task.done = !task.done;
            },

            completeAll: function() {
                this.tasks.forEach(function(task) {
                    task.done = true;
                });
            },

            removeTask: function(task) {
                this.tasks.$remove(task);
            },

            clearCompleted: function() {
                this.tasks = this.tasks.filter(function(task) {
                    return !task.done;
                });
            }
        }
}

</script>
